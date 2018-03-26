@extends('layouts.extended')

@section('content')

    <div class="row">
        <div class="col-md-12">
        <a href="{{ route("control-panel.users.create") }}"><button type="button"  style="margin-left: 93%;" class="btn btn-success btn-sm">Create</button></a>
            <div class="card">
            
                <h5 class="card-header gold white-text">Users
                </h5>
                
                <div class="card-body">
                    <table id="users" class="table table-striped data-table-custom" cellspacing="0" width="100%">
                        <thead style="background-color:#d2d6d9">
                        <tr>
                            <th><b>Id</b></th>
                            <th><b>First Name</b></th>
                            <th><b>Last Name</b></th>
                            <th><b>Username</b></th>
                            <th><b>Email</b></th>
                            <th><b>Registered</b></th>
                            <th><b>Picture</b></th>
                            <th><b>Active</b></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->fname}}</td>
                                <td>{{$user->lname}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->registered()}}</td>
                                <td>{{$user->picture}}</td>
                                <td>
                                    @if($user->active)
                                        <span class="d-block bg-success text-white text-capitalize text-lg-center">Active</span>
                                </td>
                                @else
                                    <span class="d-block bg-danger text-white text-capitalize text-lg-center">Inactive</span></td>
                                @endif
                                {{--TODO add action mapping for buttons--}}
                                <td>
                                    <a class="btn btn-info btn-custom"
                                       href="{{ route("control-panel.users.edit", ["user"=> $user->id]) }}"
                                       data-balloon="Edit" data-balloon-pos="up" title="Edit user">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>

                                    @if($user->active)
                                        <a class="btn btn-warning btn-custom"
                                           href="{{ route("control-panel.users.deactive", ["user"=> $user->id]) }}"
                                           data-balloon="Disable" data-balloon-pos="up" title="Deactivate User">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-warning btn-custom"
                                           href="{{ route("control-panel.users.active", ["user"=> $user->id]) }}"
                                           data-balloon="Enable" data-balloon-pos="up" title="Activate User">
                                            <i class="fa fa-unlock" aria-hidden="true"></i>
                                        </a>
                                    @endif


                                    <a class="btn btn-danger btn-custom"
                                       href="{{ route("control-panel.users.delete", ["user"=> $user->id]) }}"
                                       data-balloon="Delete" data-balloon-pos="up" title="Delete User">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection