<?php

namespace App\Http\Controllers;

use App\Assign;
use App\Leave;
use App\Timetable;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $assigns = Assign::latest()->get();

        return view('assign.index', compact('assigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Leave $leave)
    {
        Carbon::parse($leave->date)->format('l');

        $schedules = Timetable::where('user_id', $leave->user_id)->where('day', Carbon::parse($leave->date)->format('l'))->where('is_available', false)->get();

        foreach($schedules as $schedule){
            Assign::create([
                'date' => $leave->date,
                'day' => $schedule->day,
                'time' => $schedule->time
            ]);
        }

        return view('assign.create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Assign::create([
            'user_id' => auth()->id(),
            'date' => \request('date')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function show(Assign $assign)
    {
        $assignment = Assign::find($assign);

        foreach ($assignment as $ass)
        {
            $free_faculty = Timetable::where('day', $ass->day)->where('time', $ass->time)->where('is_available', 1)->get();
        }

        return view('assign.show', compact('assignment','free_faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function edit(Assign $assign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assign $assign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assign $assign)
    {
        //
    }
}
