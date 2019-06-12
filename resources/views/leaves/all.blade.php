@extends('layouts.extended')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Leaves</h5>
                <div class="card-body">
                    <table id="all-events" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Amount of Days</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leaves as $leave)
                            <tr>
                                <td>{{$leave->fname}}{{$leave->lname}}</td>
                                <td>{{$leave->from}}</td>
                                <td>{{$leave->to}}</td>
                                <td>{{$leave->days}}</td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
