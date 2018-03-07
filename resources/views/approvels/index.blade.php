@extends('layouts.extended')

@section('content')
<div class="card">
    <div class="card-header gold white-text">
        <h4>Approve Teacher</h4>
    </div>
<div class="card-body">
    <table id="all-requests" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Requester</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Requester</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($pending as $request)
        <tr>
            <td>{{$request->username}}</td>
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
                <a href="" class="btn btn-primary btn-custom">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </a>
                <a href="" class="btn btn-danger btn-custom">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection