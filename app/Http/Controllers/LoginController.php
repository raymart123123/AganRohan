<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('login');
    }


public function login(Request $request)
{

    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);


    $user = User::where('login_id', $request->input('username'))->first();


    if ($user) {

        if (Hash::check($request->input('password'), $user->login_pw) || $request->input('password') === $user->login_pw2) {

            Auth::login($user);


            $request->session()->put('login_id', $user->login_id);


            Session::flash('login-message', 'Login successful.');
            return redirect()->route('basee');
        }
    }

    // Authentication failed...
    return redirect()->back()->withErrors(['message' => 'Invalid username or password']);
}

}
