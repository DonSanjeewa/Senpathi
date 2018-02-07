<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        .text-center{text-align:center!important}
    </style>
</head>
<body>

<div class="row">
    <?php $image_path = '\img\dslogo.jpg'; ?>
    <div style="text-align: center">
        <img class="text-center" src="{{ public_path() . $image_path }}" width="128px" height="128px">
    </div>
    <h2 class="text-center">D. S. Senanayake College</h2>
    <span class="text-center"><h4>Teacher Report - {{$teacher->name_with_initials}}</h4></span>
</div>
<div style="margin-left: 1em">
    <h2><b>Basic Details</b></h2><hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th align="left" width="250px"> </th>
            <th align="left" width="250px"> </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>NIC</td>
            <td>{{$teacher->nic_no}}</td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td>{{$teacher->full_name}}</td>
        </tr>
        <tr>
            <td>Name with Initials</td>
            <td>{{$teacher->name_with_initials}}</td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td>{{$teacher->dob}}</td>
        </tr>
        <tr>
            <td>Gender</td>
            @if($teacher->gender == 'm')
                <td>Male</td>
            @else
                <td>Female</td>
            @endif
        </tr>
        {{--<tr>--}}
            {{--<td>Nationality</td>--}}
            {{--<td>{{$teacher->festival_advance}}</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>Religion</td>--}}
            {{--<td>{{$teacher->festival_advance}}</td>--}}
        {{--</tr>--}}
        <tr>
            <td>Civil Status</td>
            <td>{{$teacher->civil_status}}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{$teacher->permanent_addr}}</td>
        </tr>
        <tr>
            <td>Contact Mobile No</td>
            <td>{{$teacher->contact_mobile}}</td>
        </tr>
        </tbody>
    </table>
</div>

<div style="margin-left: 1em;">
    <h2><b>Academic Details</b></h2><hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th align="left" width="250px"> </th>
            <th align="left" width="250px"> </th>
        </tr>
        </thead>
        <tbody>
        {{--<tr>--}}
            {{--<td>Register No</td>--}}
            {{--<td>{{$teacher->register_no}}</td>--}}
        {{--</tr>--}}
        <tr>
            <td>Signature No</td>
            <td>{{$teacher->signature_no}}</td>
        </tr>
        <tr>
            <td>Serial No</td>
            <td>{{$teacher->serial_no}}</td>
        </tr>
        <tr>
            <td>Date Joined School</td>
            <td>{{$teacher->joined_date}}</td>
        </tr>
        <tr>
            <td>Medium</td>
            <td>{{$teacher->medium}}</td>
        </tr>
        {{--<tr>--}}
            {{--<td>Designation</td>--}}
            {{--<td>{{$teacher->designation_id}}</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>Section</td>--}}
            {{--<td>{{$teacher->section}}</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>Main Subject</td>--}}
            {{--<td>{{$teacher->main_subject_id}}</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>Service Garde</td>--}}
            {{--<td>{{$teacher->service}}</td>--}}
        {{--</tr>--}}
        <tr>
            <td>Educational Qualifications</td>
            <td>{{$teacher->educational_qualific}}</td>
        </tr>
        <tr>
            <td>Professional Qualifications</td>
            <td>{{$teacher->professional_qualific}}</td>
        </tr>
        {{--<tr>--}}
            {{--<td>First Appointment Date</td>--}}
            {{--<td>{{$teacher->duty_assume_date}}</td>--}}
        {{--</tr>--}}
        <tr>
            <td>Due Pension Date</td>
            <td>{{$teacher->pension_date}}</td>
        </tr>
    </table>
</div>
</body>
</html>