<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function search(Request $request)
    {
        {
            try {
                $user = UserModel::findOrFail($request->input('user_id'));
            } catch (ModelNotFoundException $exception) {
                return back()->withErrors($exception->getMessage())->withInput();
            }

            return view('users.search', compact('user'));
        }
    }
}
