<?php

namespace App\Http\Controllers;

use App\Leave;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->is_hod)
        {
            $leaves = Leave::latest()->get();

        }

        return view('home', compact('leaves'));
    }
}
