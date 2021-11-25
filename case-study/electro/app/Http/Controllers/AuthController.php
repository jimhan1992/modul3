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
            if(Auth::user()->role == "Admin"){
                return redirect()->route('dashboard')->with('success', 'Login successfully!');
            }
            return redirect()->route('home')->with('success', 'Login successfully!');
        } else {
            Session::flash('errorLogin', 'tai email hoac mat khau ko dung');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
