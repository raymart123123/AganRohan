<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MallController extends Controller
{
    public function mall1()
    {

        return view('itemmall');

    }
    public function mall2()
{
    $loginId = session('login_id');
    return view('itemmall', compact('loginId'));
}
}

