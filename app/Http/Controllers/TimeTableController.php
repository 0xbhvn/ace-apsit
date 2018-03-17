<?php

namespace App\Http\Controllers;

use App\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
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
        $mondaySlots = Timetable::where('day', 'monday')->get();
        $tuesdaySlots = Timetable::where('day', 'tuesday')->get();
        $wednesdaySlots = Timetable::where('day', 'wednesday')->get();
        $thursdaySlots = Timetable::where('day', 'thursday')->get();
        $fridaySlots = Timetable::where('day', 'friday')->get();
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
        Timetable::create([
            'user_id' => auth()->id(),
            'day' => \request('day'),
            'start_time' => \request('start_time'),
            'end_time' => \request('end_time')
        ]);

        return redirect('/timetable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(Timetable $Timetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timetable  $Timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $Timetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timetable  $Timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $Timetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timetable  $Timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $Timetable)
    {
        //
    }
}
