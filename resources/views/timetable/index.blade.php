@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-primary" href="{{ url('/timetable/create') }}" role="button">Add hours</a>
                <br><br>

                <div class="card">
                    <div class="card-header">Monday</div>

                    <div class="card-body">
                        @foreach($mondaySlots as $slot)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $slot->startTime }} - {{ $slot->endTime }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <br><br>

                <div class="card">
                    <div class="card-header">Tuesday</div>

                    <div class="card-body">
                        @foreach($tuesdaySlots as $slot)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $slot->startTime }} - {{ $slot->endTime }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <br><br>

                <div class="card">
                    <div class="card-header">Wednesday</div>

                    <div class="card-body">
                        @foreach($wednesdaySlots as $slot)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $slot->startTime }} - {{ $slot->endTime }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <br><br>

                <div class="card">
                    <div class="card-header">Thursday</div>

                    <div class="card-body">
                        @foreach($thursdaySlots as $slot)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $slot->startTime }} - {{ $slot->endTime }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <br><br>

                <div class="card">
                    <div class="card-header">Friday</div>

                    <div class="card-body">
                        @foreach($fridaySlots as $slot)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $slot->startTime }} - {{ $slot->endTime }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <br><br>

                <div class="card">
                    <div class="card-header">Saturday</div>

                    <div class="card-body">
                        @foreach($saturdaySlots as $slot)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $slot->startTime }} - {{ $slot->endTime }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection