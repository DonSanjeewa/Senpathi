@extends('layouts.extended')

@section('content')
<div class="card">
    <div class="card-header gold white-text">
        <h4>Approve Teacher</h4>
    </div>
<div class="card-body">
    <table id="all-requests" class="table table-striped data-table-custom" cellspacing="0" width="100%">
        <thead style="background-color:#d2d6d9">
        <tr>
            <th><b>Requester</b></th>
            <th><b>Status</b></th>
            <th><b>Actions</b></th>
        </tr>
        </thead>
        <tfoot style="background-color:#d2d6d9">
        <tr>
            <th><b>Requester</b></th>
            <th><b>Status</b></th>
            <th><b>Actions</b></th>
        </tr>
        </tfoot>
        @if($assignedApprovals)
        <tbody>
        @foreach($assignedApprovals as $request)
        <tr>
            <td>{{$request->item->full_name}}</td>
            @if ($request->status == 'pending')
                <td><span class="d-sm-block bg-primary text-white text-capitalize text-lg-center">Pending</span></td>
            @endif
            @if ($request->status == 'approved')
                <td><span class="d-block bg-success text-white text-capitalize text-lg-center">Approved</span></td>
            @endif
            @if ($request->status == 'rejected')
                <td><span class="d-block bg-danger text-white text-capitalize text-lg-center">Rejected</span></td>
            @endif
            {{--TODO add action mapping for buttons--}}
            <td>
                <a href="{{route('academic.teachers.show', ['teacher' => $request->item->id])}}" class="btn btn-warning btn-custom">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                </a>
                <a href="{{route('approvals.approve', ['approval' =>  $request->id])}}" class="btn btn-primary btn-custom">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </a>
                <a href="{{route('approvals.reject', ['approval' => $request->id ])}}" class="btn btn-danger btn-custom">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
        @endif
        @if(!$assignedApprovals)
        <td>No any approvels to show</td>
        @endif
    </table>
</div>
@endsection