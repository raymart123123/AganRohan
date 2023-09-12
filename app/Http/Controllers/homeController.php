<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class homeController extends Controller
{
    public function dash()
    {

        return view('home');
    }
}
