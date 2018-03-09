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
    <?php $image_path = '\img\dslogo2.png'; ?>
    <div style="text-align: center">
        <img class="text-center" src="{{ public_path() . $image_path }}" width="128px" height="128px">
    </div>
    <h2 class="text-center">D. S. Senanayake College</h2>
    <span class="text-center"><h4>Staff Full Report</h4></span>
</div>

<table style="width:100%">
<tr style="color:white;font-weight:700;background-color:rgba(45, 65, 83, 1);font-family:Arial Black;font-size:15px">
  <th>Name With Initials</th>
  <th>Full Name</th>
  <th>NIC</th>
  <th>DOB</th>
  <th>Address</th>
  <th>Email</th>
  <th>Gender</th>
  <th>Contact No</th>
  <th>Civil Status</th>
  <th>Medium</th>
  <th>Nature Of Appointment</th>
  <th>Current Role</th>
  <th>Salary</th>
  <th>First Appoinment</th>
</tr>

@foreach($teachers as $teacher)
<tr>
  <td>{{$teacher->name_initials}}</td>
  <td>{{$teacher->full_name}}</td>
  <td>{{$teacher->nic}}</td>
  <td>{{$teacher->dob}}</td>
  <td>{{$teacher->address}}</td>
  <td>{{$teacher->email}}</td>

  @if($teacher->gender == 'm')
  <td>Male</td>
  @elseif($teacher->gender == 'f')
  <td>Female</td>
  @else
  <td>None</td>
  @endif

  <td>{{$teacher->contact_mobile}}</td>
  <td>{{$teacher->civil_status}}</td>
  <td>{{$teacher->medium}}</td>
  <td>{{$teacher->nature_of_appointment}}</td>
  <td>{{$teacher->current_role}}</td>
  <td>{{$teacher->salary}}</td>
  <td>{{$teacher->first_appointment_at}}</td>

</tr>
@endforeach
</table>