<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
//        $paginate = User::paginate(3);
        $users = User::paginate(5);
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        if (!Gate::allows('crud_user')) {
            abort(403);
        }
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {

        if (!Gate::allows('crud_user')) {
            abort(403);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('users.index');

    }

    public function edit($id)
    {
        if (!Gate::allows('crud_user')) {
            abort(403);
        }
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (!Gate::allows('crud_user')) {
            abort(403);
        }
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if (!Gate::allows('crud_user')) {
            abort(403);
        }
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
    public function register(UserRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = 'Customer';
        $user->status = "1";
        $user->save();
        return redirect()->route('login');
    }
}
