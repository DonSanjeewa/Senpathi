@extends('layouts.extended')

@section('content')
@if(!empty($teacher[0]))
<div class="tab-content pt-5">


    <div class="tab-pane fade in active show" id="mainProfile1" role="tabpanel">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12">

                <!--Section: Basic Info-->

                <section class="card card-cascade card-avatar mb-4 ">
                <?php $image_path = '/images/'.$teacher[0]->picture; ?>
                    @if($teacher[0]->gender == 'm')
                        <img alt="" src="{{ public_path() . $image_path }}" srcset=""
                             class="avatar avatar-160 photo" height="160" width="160">
                    @else if
                        <img alt="" src="{{ public_path() . $image_path }}" srcset=""
                             class="avatar avatar-160 photo" height="160" width="160">
                    @endif

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">
                            <strong>{{$teacher[0]->name_initials}}</strong>
                        </h4>
                        <h5>
                            <a rel="nofollow" href="?utm_source=mdbootstrap.com" target="_blank"></a>
                        </h5>
                        <p class="grey-text">, </p>

                        <!--Text-->
                        <p class="card-text mt-3"></p>

                        <a class="btn btn-primary btn-md blue white-text" href="" role="button" data-toggle="modal" data-target="#modalEditProfile">Edit profile
                            <i class="fa fa-pencil ml-2"></i>
                        </a>

                        <a class="btn btn-mdb btn-md waves-effect waves-light" href="{{route('report.teacher-details',$teacher[0]->id)}}" role="button">Generate Report
                            <i class="fa fa-file-pdf-o ml-2"></i>
                        </a>
                    </div>

                </section>

            </div>


            <div class="col-lg-8 col-md-12 text-left">

                <div class="text-left mt-3 mb-5">

                    <div class="card">
                        <div class="card-header gold white-text">
                            <h4>Personal Details </h4>
                        </div>
                        <div class="card-body">

                            <table id="income" class="table table-light" cellspacing="0" width="90%">
                                <thead><b>General</b></thead>
                                <tr>
                                    <th>NIC NO</th>
                                    <td>{{$teacher[0]->nic}}</td>
                                    <th>Name With Initials</th>
                                    <td>{{$teacher[0]->name_initials}}</td>
                                </tr>
                                <tr>
                                    <th>Full Name</th>
                                    <td>{{$teacher[0]->full_name}}</td>
                                    <th>Date of Birth</th>
                                    <td>{{$teacher[0]->dob}}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    @if($teacher[0]->gender == 'm')
                                    <td>Male</td>
                                    @elseif($teacher[0]->gender == 'f')
                                    <td>Female</td>
                                    @else
                                    <td>None</td>
                                    @endif
                                    <th>Contact No</th>
                                    <td>{{$teacher[0]->contact_mobile}}</td>
                                </tr>
                                <tr>
                                    <th>Civil Status</th>
                                    <td>{{$teacher[0]->civil_status}}</td>
                                    <th>Address</th>
                                    <td>{{$teacher[0]->address}}</td>
                                </tr>
                            </table>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@else
<div class="alert d-block bg-danger form-error">
    <ul>
        <li>
            <span class="text-white">No Teacher found with the given id</span>
        </li>
    </ul>
</div>
@endif
@endsection