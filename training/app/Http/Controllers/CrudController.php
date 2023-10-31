<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('crud.index');
    }
    public function create()
    {
        return view('crud.create');
    }
    public function data(Request $request)
    {
            dd($request);
        // dd($_REQUEST);
        // print_r($_REQUEST);
    }
}
