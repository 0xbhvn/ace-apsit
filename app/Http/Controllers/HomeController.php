<?php

namespace App\Http\Controllers;

use App\Leave;
use App\Assign;
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
        $requests = Assign::where('assignee', auth()->id())->get();

        if(auth()->user()->is_hod)
        {
            $leaves = Leave::latest()->get();

            return view('home', compact('leaves', 'requests'));
        }

        return view('home', compact('leaves','requests'));
    }
}
