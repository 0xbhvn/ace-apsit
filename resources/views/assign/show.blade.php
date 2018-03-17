@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Free faculties</div>
                    <?php
                        foreach ($assignment as $ass)
                        {
                            $free_faculty = App\Timetable::where('day', $ass->day)->where('time', $ass->time)->where('is_available', 1)->get();
                        }
                    ?>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($free_faculty as $prof)
                                <li class="list-group-item">{{ $prof->user->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
    </div>
@endsection