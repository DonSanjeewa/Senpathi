@extends('layouts.extended')

@section('content')
    <table id="all-events" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($events as $event)
            <tr>
                <td>{{$event->name}}</td>
                <td>{{$event->location}}</td>
                <td>{{$event->description}}</td>
                <td>{{$event->starts_at}}</td>
                <td>{{$event->ends_at}}</td>
                {{--TODO add action mapping for buttons--}}
                <td>
                    <a href="{{route('events.show', ['event' => $event->id])}}" class="btn btn-primary btn-custom">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning btn-custom">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('events.delete', ['event' => $event->id])}}" class="btn btn-danger btn-custom">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
