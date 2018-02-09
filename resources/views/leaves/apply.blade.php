@extends('layouts.extended')


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
                <form method="POST" action="{{route('leaves.store')}}">

            {{--<p class="h5 text-center mb-4">Write to us</p>--}}
            {{ csrf_field() }}


               

            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->fname}} {{\Illuminate\Support\Facades\Auth::user()->lname}}" id="form3" class="form-control" disabled="true">
                <label for="form3">Your name</label>
            </div>

            <div class="md-form">
                <i class="fa fa-key prefix grey-text" ></i>
                <input type="text" id="form3" value="{{\Illuminate\Support\Facades\Auth::user()->id}} " class="form-control" disabled="true">
                <label for="form3" disabled="true">ID Number:</label>
            </div>

            <br>
            <i class="fa fa-pen prefix grey-text"></i>
            <label id="type">Leave Type</label>
            <div id="radio">
                    <div class="md-form">
                     
                     <!--Radio group-->
                        <div class="form-group">
                            <input name="leave_id" type="radio" value='1' class="with-gap" id="radio106">
                            <label for="radio106">Casual</label>
                        </div>

                        <div class="form-group">
                            <input name="leave_id" type="radio" value='2' class="with-gap" id="radio107" checked>
                            <label for="radio107">Medical</label>
                        </div>

                        <div class="form-group">
                            <input name="leave_id" type="radio" value='3' class="with-gap" id="radio108">
                            <label for="radio108">Other</label>
                        </div>
                        <div class="form-group">
                            <input name="leave_id" type="radio" value='4' class="with-gap" id="radio109">
                            <label for="radio109">Maternity</label>
                        </div>
                        <!--Radio group-->  
                     </div>
            </div>
            <br>
             
            <div class="md-form">
                <i class="fa fa-calendar prefix grey-text   "></i>
                <input placeholder="" type="text" id="start_date" name="start_date" class="form-control datepicker" value="{{ old('start_date') }}">
                <label for="date-picker-example">Start Date</label>


            </div>
            <br>

            <div class="md-form">
                
                <i class="fa fa-calendar-check-o prefix grey-text" aria-hidden="true"></i>
                <input  placeholder="" type="text" id="end_date" name="end_date" value="{{ old('end_date') }}"class="form-control datepicker">
                <label for="date-picker-example">End Date</label>
            </div>
            <br>

            <button type="submit" class="btn btn-deep-orange">Apply</button>
            </form>
            <!-- Form contact -->
            </p>
            
        </div>
    </div>
    <!--/.Panel-->
@endsection 