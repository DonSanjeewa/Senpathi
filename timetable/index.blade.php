@extends('layouts.extended')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Timetables</h5>
                <div class="card-body">
                    <table id="all-timetables" class="table table-striped data-table-custom" cellspacing="0"
                           width="100%">
                        <thead style="background-color:#d2d6d9">
                        <tr>
                            <th><b>Year</b></th>
                            <th><b>Grade</b></th>
                            <th><b>Class</b></th>
                            <th><b>Actions</b></th>
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
                                    ])}}" class="btn btn-warning btn-custom" title="View Time Table">
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
