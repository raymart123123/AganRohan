<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
   public function index()
   {
      return view('register');
   }

   public function register(Request $request)
   {
      $validator = Validator::make($request->all(), [
         'username' => [
            'required',
            'unique:TUser,login_id',
            'regex:/^[a-zA-Z0-9]+$/',
         ],
         'password' => 'required|min:6',
         'password_confirmation' => 'required|same:password',
      ]);

      if ($validator->fails()) {
         return redirect()->back()->withErrors($validator)->withInput();
      }

      $user = User::where("login_id", $request->username)->first();
      if ($user) {
         return redirect()->back()->withErrors([
            "message" => "Username already created, please try another!",
         ]);
      }

      User::create([
         "login_id" => $request->username,
         "login_pw" => md5($request->password),
         "login_pw2" => $request->password,
      ]);

      session()->flash('success', 'You have been successfully registered.');

      return redirect('/login');
   }
}
