

@extends('layouts.extended')

@section('content')
    <!--Panel-->
    {{--TODO Complete leave apply--}}
     <div class="card">
        <div class="card-header black-skin lighten-1 white-text">
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

                    	
                    <p class="card-text">From :  {{$leave->from}} </p>
                    <p class="card-text">To : {{$leave->to}} </p>
                    <p class="card-text">Number of Days: {{$leave->days}}</p>
                       
                </div>
                <br>
            @endforeach
     
     </div>  

    <!--/.Panel-->
    @endsection 

