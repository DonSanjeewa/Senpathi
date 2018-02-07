@extends('layouts.extended')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header blue white-text">Timetables</h5>
                <div class="card-body">
                    <table id="all-events" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Class</th>
                            <th>Grade</th>
                            <th>Year</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach($events as $event)--}}
                        <tr>
                            <th>Class</th>
                            <th>Grade</th>
                            <th>Year</th>
                            {{--TODO add action mapping for buttons--}}
                            <td>
                                <a href="" class="btn btn-primary btn-custom">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-warning btn-custom">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-custom">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
