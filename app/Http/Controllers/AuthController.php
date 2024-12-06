<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return redirect()->route("dashboard", ["user" => Auth::user()]);
        }
        return view("welcome");
    }


    public function login() {
        if(Auth::check()) {
            return redirect()->route('dashboard', ['user' =>Auth::user()]);
        }
        return view('login');
    }


    public function redirectDashboard() {
        
        if(!Auth::check()) {
            return redirect()->route('login');
        }

         $user = Auth::user();   
        return view('dashboard', ['user' => $user]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the login page
        return redirect()->route('login');
    }

    public function findMatch() {
        $user = Auth::user();
        $match = User::inRandomOrder()->first();

        return view('dashboard', ['match' => $match, 'user' => $user]);
    }
}
