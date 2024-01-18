<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup()
    {
        return view('signup');
    }

    public function signupPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;

        $user->password = Hash::make($request->password); // inscription

        $user->save();

        return redirect('/login'); // after signup redirect to /login
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)  // identification
    {
        $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

        if (Auth::attempt($credentials)) {
            return redirect('/'); // after login redirect to /
        }

        return back()->with('error', 'Email or Password');
    }
}
