<?php

namespace App\Http\Controllers;

use App\TimeTable;
use App\User;
use Illuminate\Http\Request;

class TimeTableController extends Controller
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
        $mondaySlots = TimeTable::where('day', 'monday')->get();
        $tuesdaySlots = TimeTable::where('day', 'tuesday')->get();
        $wednesdaySlots = TimeTable::where('day', 'wednesday')->get();
        $thursdaySlots = TimeTable::where('day', 'thursday')->get();
        $fridaySlots = TimeTable::where('day', 'friday')->get();
        $saturdaySlots = TimeTable::where('day', 'saturday')->get();

        return view('timetable.index', compact('mondaySlots','tuesdaySlots','wednesdaySlots','thursdaySlots','fridaySlots','saturdaySlots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('timetable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        TimeTable::create([
            'user_id' => auth()->id(),
            'day' => \request('day'),
            'startTime' => \request('start_time'),
            'endTime' => \request('end_time')
        ]);

        return redirect('/timetable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function show(TimeTable $timeTable)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeTable $timeTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeTable $timeTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeTable $timeTable)
    {
        //
    }
}
