@extends('layouts.extended')

@section('content')
    <!--Panel-->
    {{--TODO Complete leave apply--}}
     <div class="card">
        <div class="card-header gold white-text">
                Pending Leave Details           
            </div>
        </div>
          @foreach ($leaves as $leave) 
            
             
                <!--Panel-->
                
                <div class="card card-body">
                    
                    @if($leave->leave_id == 1)
                    <h4 class="card-title">Casual Leave</h4>
                    @endif
                    @if($leave->leave_id == 2)
                    <h4 class="card-title">Medical Leave</h4>
                    @endif
                    @if($leave->leave_id == 3)
                    <h4 class="card-title">Other Leave</h4>
                    @endif
                    @if($leave->leave_id == 4)
                    <h4 class="card-title">Maternity Leave</h4>
                    @endif

                    <p class="card-text">Name : {{$leave->fname}} {{$leave->lname}} </p>
                    <p class="card-text">ID :  {{$leave->leaveid}} </p> 
                    <p class="card-text">From :  {{$leave->from}} </p>
                    <p class="card-text">To : {{$leave->to}} </p>
                    <p class="card-text">Number of Days: {{$leave->days}}</p>
                    <div class="col-md-3">
                    <a href="/leaves/approve/{{$leave->leaveid}}">
                    <button class="btn btn-deep-orange">Approve</button>
                    </a>
                    <a href="/leaves/cancel/{{$leave->leaveid}}">
                    <button class="btn btn-deep-orange">Cancel</button>
                    </a>
                    </div> 
                </div>
                <br>
            @endforeach
     
     </div>  

    <!--/.Panel-->
    @endsection 

