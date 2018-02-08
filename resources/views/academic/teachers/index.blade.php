@extends('layouts.extended')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header blue white-text">Teachers</h5>
            <div class="card-body">
                <table id="all-teachers" class="table table-bordered data-table-custom" cellspacing="0" width="100%" title="Teacher">
                    <thead>
                    <tr>
                        <th>NIC</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Grade</th>
                        <th>Medium</th>
                        <th>Contact</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>NIC</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Grade</th>
                        <th>Medium</th>
                        <th>Contact</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$teacher->nic_no}}</td>
                        <td>{{$teacher->name_with_initials}}</td>
                        @if($teacher->gender == 'm')
                        <td>Male</td>
                        @elseif($teacher->gender == 'f')
                        <td>Female</td>
                        @else
                        <td>None</td>
                        @endif
                        <td>{{$teacher->grade}}</td>
                        <td>{{$teacher->medium}}</td>
                        <td>{{$teacher->contact_mobile}}</td>
                        {{--TODO add action mapping for buttons--}}
                        <td>
                            <a href="{{route('academic.teachers.show', ['teacher' => $teacher->id])}}" class="btn btn-primary btn-custom">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-warning btn-custom">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-danger btn-custom">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
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