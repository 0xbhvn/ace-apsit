@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add hours</div>

                    <div class="card-body">
                        <form id="form" class="form-horizontal" method="POST" action="{{ url('/timetable') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('time_slot') ? ' has-error' : '' }}">
                                <label for="day" class="col-md-4 control-label">Day</label>

                                <div class="col-md-6">
                                    <select id="day" class="form-control" name="day" required autofocus>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                    </select>

                                    @if ($errors->has('day'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('day') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                                <label for="start_time" class="col-md-4 control-label">Start Time</label>

                                <div class="col-md-6">
                                    <input id="start_time" type="text" class="form-control" name="start_time" required>

                                    @if ($errors->has('start_time'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('start_time') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
                                <label for="end_time" class="col-md-4 control-label">End Time</label>

                                <div class="col-md-6">
                                    <input id="end_time" type="text" class="form-control" name="end_time" required>

                                    @if ($errors->has('end_time'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('end_time') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection