<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function hanleGoogleCallback(){
        try {
            $user = Socialite::driver('google')->user();
            $finduser=User::where('google_id',$user->getId())->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->route('dashboard');
            }else{
                $newUser = User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'google_id'=>$user->id,
                'password'=>bcrypt('12345678')

                ]);
                Auth::login($newUser);
                return redirect()->route('dashboard');
            }
        } catch (Exception $e) {
            
        }
    }



}
