<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
            // dd("from controller");
        return view('nirav_sir');
    }
}
