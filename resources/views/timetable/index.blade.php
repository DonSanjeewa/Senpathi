@extends('layouts.extended')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Timetables</h5>
                <div class="card-body">
                    <table id="all-timetables" class="table table-bordered data-table-custom" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Year</th>
                            <th>Grade</th>
                            <th>Class</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($timetables as $timetable)
                            <tr>
                                <th>{{$timetable->academic->year}}</th>
                                <th>{{$timetable->classRoom->grade->name}}</th>
                                <th>{{$timetable->classRoom->name}}</th>
                                <td>
                                    <a href="{{route('academic.timetables.show', [
                                        'year' => $timetable->academic->id,
                                        'class' => $timetable->classRoom->id
                                    ])}}" class="btn btn-warning btn-custom">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
