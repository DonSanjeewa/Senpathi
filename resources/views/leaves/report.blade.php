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
                            <th>Type</th>
                            <th>Amount of Days</th>
                            <th>Status</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leaves as $leave)
                            <tr>
                                <td>{{$leave->fname}}{{$leave->lname}}</td>
                                <td>{{$leave->from}}</td>
                                <td>{{$leave->to}}</td>
                                <td> 
                                    @if($leave->leave_id == '1')
                                        Casual
                                    @endif 

                                    @if($leave->leave_id == '2')
                                        Medical
                                    @endif 

                                    @if($leave->leave_id == '3')
                                        Maternity
                                    @endif 

                                    @if($leave->leave_id == '4')
                                        Other
                                    @endif 

                                </td>   
                                <td>{{$leave->days}}</td>
                            	<td>{{$leave->status}}</td>    
                   
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
