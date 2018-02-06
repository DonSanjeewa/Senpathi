@extends('layouts.extended')

@section('content')
<table id="all-requests" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Requester</th>
        <th>Next Approval</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Requester</th>
        <th>Next Approval</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </tfoot>
    <tbody>
    @foreach($requests as $request)
    <tr>
        <td>{{$request->user->fname." ".$request->user->lname}}</td>
        <td>{{$request->next_approval}}</td>
        @if ($request->status == 0)
            <td><span class="d-sm-block bg-primary text-white text-capitalize text-lg-center">Pending</span></td>
        @endif
        @if ($request->status == 1)
            <td><span class="d-block bg-success text-white text-capitalize text-lg-center">Approved</span></td>
        @endif
        @if ($request->status == 2)
            <td><span class="d-block bg-danger text-white text-capitalize text-lg-center">Rejected</span></td>
        @endif
        {{--TODO add action mapping for buttons--}}
        <td>
            <a href="{{route('academic.salary-requests.show', ['request' => $request->salary_request_id])}}" class="btn btn-primary btn-custom">
                <i class="fa fa-eye" aria-hidden="true"></i>
            </a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection