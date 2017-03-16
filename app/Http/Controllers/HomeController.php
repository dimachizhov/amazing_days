<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application main page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.general');
    }
}
