<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    function home()
    {
        return view('home');
    }
}
