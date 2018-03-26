@extends('layouts.extended')

@section('content')
<div class="card">
    <div class="card-header gold white-text">
        <h4>Salary Requests</h4>
    </div>
<div class="card-body">
    <table id="all-requests" class="table table-striped data-table-custom" cellspacing="0" width="100%">
        <thead style="background-color:#d2d6d9">
        <tr>
            <th><b>Requester</b></th>
            <th><b>Next Approval</b></th>
            <th><b>Status</b></th>
            <th><b>Actions</b></th>
        </tr>
        </thead>
        <tfoot style="background-color:#d2d6d9">
        <tr>
            <th><b>Requester</b></th>
            <th><b>Next Approval</b></th>
            <th><b>Status</b></th>
            <th><b>Actions</b></th>
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
                <a href="{{route('academic.salary-requests.show', ['request' => $request->salary_request_id])}}" class="btn btn-primary btn-custom" title="View Salary Requests">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection