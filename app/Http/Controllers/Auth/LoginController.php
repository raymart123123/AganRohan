<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validation logic here

        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard'); // Redirect to your dashboard or any other route
        }

        // Authentication failed...
        return redirect()->back()->withErrors(['message' => 'Invalid username or password']);
    }

    // Add other methods as needed
}
