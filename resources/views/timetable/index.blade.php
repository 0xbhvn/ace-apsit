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
                                <li class="list-group-item">{{ $slot->start_time }} - {{ $slot->end_time }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
@endsection