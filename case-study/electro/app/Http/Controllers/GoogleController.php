<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use PHPUnit\Exception;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(){
        try {
            $userGG = Socialite::driver('google')->user();
            $finduser= User::where('google_id',$userGG->id)->first();
            if($finduser){
                Auth::login($finduser);
                if(Auth::user()->role == "Admin"){
                    return redirect()->route('dashboard')->with('success', 'Login successfully!');
                }
                return redirect()->route('home')->with('success', 'Login successfully!');
            }else{
                $newUser=new User();
                $newUser->name = $userGG->name;
                $newUser->email = $userGG->email;
                $newUser->password = Hash::make('123456');
                $newUser->phone = '12563';
                $newUser->google_id = $userGG->id;
                $newUser->address = 'hn';
                $newUser->role = 'Customer';
                $newUser->status = '1';
                $newUser->save();
                Auth::login($newUser);
                return redirect()->route('home')->with('success', 'successfully!');
            }
        }catch (Exception $e){

        }
    }
}
