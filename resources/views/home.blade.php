@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pending leaves</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($leaves as $leave)
                            <li class="list-group-item">{{ $leave->user_id }} | {{ $leave->date }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
