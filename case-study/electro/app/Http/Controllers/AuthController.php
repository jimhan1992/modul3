<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = [
            'email' => $email,
            'password' => $password
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('users.index');
        } else {
            Session::flash('errorLogin', 'tai email hoac mat khau ko dung');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
