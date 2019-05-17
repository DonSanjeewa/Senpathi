@extends('layouts.extended')

@section('content')
    @if(!empty($event))
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header gold white-text">Events</h5>
                    <div class="card-body">
                        <h5>Event</h5>
                        <table id="all-events" class="table table-bordered" cellspacing="0" width="100%">
                            <tr>
                                <th>ID</th>
                                <td>{{$event->id}}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{$event->location}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$event->description}}</td>
                            </tr>
                            <tr>
                                <th>Starts at</th>
                                <td>{{$event->starts_at}}</td>
                            </tr>
                            <tr>
                                <th>Ends at</th>
                                <td>{{$event->ends_at}}</td>
                            </tr>
                        </table>
                        <h5>Operations</h5>
                        <table id="all-events" class="table table-bordered" cellspacing="0" width="100%">
                            <tr>
                                <th>Created By</th>
                                <td>{{$event->user->username}}</td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>{{$event->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>{{$event->updated_at}}</td>
                            </tr>
                        </table>
                        <div>
                            <a class="btn btn-primary btn-md blue white-text" href="{{route('events.edit', ['event' => $event->id])}}" role="button">
                                <i class="fa fa-pencil ml-2"></i>Edit Event
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert d-block bg-danger form-error">
            <ul>
                <li>
                    <span class="text-white">No event found with the given id</span>
                </li>
            </ul>
        </div>
    @endif
@endsection