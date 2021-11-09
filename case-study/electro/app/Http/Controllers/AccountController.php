<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    public function register(AccountRequest $request)
    {
        return view('register.register');
    }

    public function login()
    {

    }

    public function logout()
    {

    }
}
