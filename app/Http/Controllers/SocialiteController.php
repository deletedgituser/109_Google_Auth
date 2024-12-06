<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback() {
        $googleUser = Socialite::driver('google')->user();
        
        $checkUser = User::where('email', $googleUser->email)->first();

        if($checkUser) {
            $checkUser->update(['google_token' => $googleUser->token]);
            Auth::login($checkUser, true);
        } else {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => bcrypt('password'),
                'avatar' => $googleUser->avatar,
                'google_token' => $googleUser->token
            ]);

            Auth::login($user, true);
        }

        return redirect()->route('dashboard');
    }

}   
