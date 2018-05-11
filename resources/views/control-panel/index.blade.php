@extends('layouts.extended')

@section('content')


            <div class="container">

                <div class="row">
                    <a class="col-3 col-example" href="{{ route("control-panel.users.index") }}">

                        <h5 style="font-weight:700">Users</h5>
                        <i style="verticle-align:middle" class="fa fa-user fa-3x"></i>

                    </a>

                    <a class="col-3 col-example" href="{{ route("control-panel.roles.index") }}">
                    <h5 style="font-weight:700">Roles</h5>
                    <i style="verticle-align:middle" class="fa fa-lock fa-3x"></i>
                    </a>

                    <a class="col-3 col-example" href="{{ route("control-panel.permissions.index") }}">
                    <h5 style="font-weight:700">Permissions</h5>
                    <i style="verticle-align:middle" class="fa fa-tasks fa-3x"></i>
                    </a>

                    <a class="col-3 col-example" href="{{ route("control-panel.underconstruction") }}">
                    <h5 style="font-weight:700">Backups</h5>
                    <i style="verticle-align:middle" class="fa fa-download fa-3x"></i>
                    </a>

                </div>

                <!-- <div class="row">
                    <div class="col-sm-3 col-example">
                    <h5 style="font-weight:700">Backups</h5>
                    <i  style="verticle-align:middle" class="fa fa-university fa-3x"></i>
                    </div>
                    <div class="col-sm-3 col-example">
                    <h5 style="font-weight:700">Certificates</h5>
                    <i  style="verticle-align:middle" class="fa fa-certificate fa-3x"></i>
                    </div>
                    <div class="col-sm-3 col-example">
                    <h5 style="font-weight:700">Backups</h5>
                    <i style="verticle-align:middle" class="fa fa-download fa-3x"></i>
                    </div>
                </div> -->

                
            </div>

        
@endsection