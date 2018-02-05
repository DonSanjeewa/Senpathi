@extends('layouts.extended')

 <script type="text/javascript">    
        $('.datepicker').pickadate();
 </script>
@section('content')
    <!--Panel-->
    {{--TODO Complete leave apply--}}
     <div class="card">
        <div class="card-header black-skin lighten-1 white-text">
            Leave Details
        </div>
        <div class="row">
            <div class="col-md-3">
                <!--Panel-->

                <div class="card card-body">
                    <h4 class="card-title">Casual Leave</h4>
                    <p class="card-text">Total : 20</p>     
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body">
                    <h4 class="card-title">Medical Leave</h4>
                    <p class="card-text">Total : 21</p>     
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body">
                    <h4 class="card-title">Maternity Leave</h4>
                    <p class="card-text">Total : 84</p>     
                </div>
            </div>
            <div class="col-md-3">
                 <div class="card card-body">
                    <h4 class="card-title">Other Leave</h4>
                    <p class="card-text">Depend upon Request </p>     
                </div>
            </div>
        </div>
     </div>   
     <br>

        <div class="card">
        <div class="card-header black-skin lighten-1 white-text">
            Apply Leave
        </div>
        <div class="card-body">
            {{--<h4 class="card-title">Special title treatment</h4>--}}
            <p class="card-text">
                <!-- Form contact -->
                <form>

            {{--<p class="h5 text-center mb-4">Write to us</p>--}}

            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="form3" class="form-control">
                <label for="form3">Your name</label>
            </div>

             <!--Dropdown primary-->
            <div class="dropdown">
                <i class="fa fa-level-down" aria-hidden="true"></i>
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Leave Type</button>
               <div class="dropdown-menu dropdown-primary">
                <a class="dropdown-item" href="#">Casual</a>
                <a class="dropdown-item" href="#">Annual</a>
                <a class="dropdown-item" href="#">Medical</a>
                <a class="dropdown-item" href="#">Maternity</a>
               </div> 
            </div>
            <br>
               
            <div class="md-form">
                <i class="fa fa-calendar prefix grey-text   "></i>
                <input placeholder="" type="text" id="date-picker-example" class="form-control datepicker">
                <label for="date-picker-example">Start Date</label>
            </div>
            <br>

            <div class="md-form">
                
                <i class="fa fa-calendar-check-o prefix grey-text" aria-hidden="true"></i>
                <input placeholder="" type="text" id="date-picker-example" class="form-control datepicker">
                <label for="date-picker-example">End Date</label>
            </div>
            <br>

            <div class="md-form">
                <i class="fa fa-pencil prefix grey-text"></i>
                <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
                <label for="form8">Your message</label>
            </div>

            {{--<div class="text-center">--}}
                {{--<button class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1"></i></button>--}}
            {{--</div>--}}

            </form>
            <!-- Form contact -->
            </p>
            <a class="btn btn-deep-orange">Apply</a>
        </div>
    </div>
    <!--/.Panel-->
@endsection 