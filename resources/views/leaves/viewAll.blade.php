 @extends('layouts.extended')
<script type="text/javascript">
$('.datepicker').pickadate();
</script>

@section('content')
    <!--Panel-->
    {{--TODO Complete leave apply--}}
     <div class="card">
        <div class="card-header black-skin lighten-1 white-text">
           		Pending Leave Details        	
        	</div>
        </div>
         <?php foreach ($leaves as $leave) { 
      			$createDate = new DateTime($leave->from);
      			$endDate = new DateTime($leave->to);

				$fromDate = $createDate->format('Y-m-d');
				$toDate = $endDate->format('Y-m-d');
      		 ?>
                <!--Panel-->
                
                <div class="card card-body">
                    <h4 class="card-title">Casual Leave</h4>
                    
                    <p class="card-text">From : <?php echo $fromDate; ?></p>
                    <p class="card-text">To :<?php echo $toDate; ?></p>
                    <p class="card-text">Number of Days:<?php echo $leave->days; ?></p>
                       
                </div>
                <br>
            <?php } ?>
     
     </div>  

    <!--/.Panel-->
@endsection 