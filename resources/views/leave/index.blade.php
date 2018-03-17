@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-primary" href="{{ url('/leave/create') }}" role="button">Request a leave</a>
                <br><br>

                <div class="card">
                    <div class="card-header">Remaining leaves</div>

                    <div class="card-body">
                        {{ $user->remaining_leaves }}
                    </div>
                </div>
                <br><br>

            </div>
        </div>
    </div>
@endsection