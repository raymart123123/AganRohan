<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class baseeController extends Controller
{
    public function dashboard()
    {

        return view('basee');

    }
    public function userw()
{
    $loginId = session('login_id');
    return view('basee', compact('loginId'));
}
}

