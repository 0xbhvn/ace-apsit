@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pending</div>

                    <div class="card-body">
                        @foreach($assigns->where('is_approved', false) as $assign)
                            <li class="list-group-item">
                                <a class="nav-link" href="/assign/{{ $assign->id }}">{{ $assign->date }}</a> <span class="badge badge-warning">Pending</span>
                            </li>
                        @endforeach
                    </div>
                </div>
                <br><br>

                <div class="card">
                    <div class="card-header">Assigned</div>

                    <div class="card-body">
                        @foreach($assigns->where('is_approved', true) as $assign)
                            <li class="list-group-item">
                                {{ $assign->date }} <span class="badge badge-success">Assigned</span>
                            </li>
                        @endforeach
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
@endsection