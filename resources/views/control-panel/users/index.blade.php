@extends('layouts.extended')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Users</h5>
                <div class="card-body">
                    <table id="users" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Registered</th>
                            <th>Picture</th>
                            <th>Active</th>
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
                                       data-balloon="Edit" data-balloon-pos="up">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>

                                    @if($user->active)
                                        <a class="btn btn-warning btn-custom"
                                           href="{{ route("control-panel.users.edit", ["user"=> $user->id]) }}"
                                           data-balloon="Disable" data-balloon-pos="up">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-warning btn-custom"
                                           href="{{ route("control-panel.users.edit", ["user"=> $user->id]) }}"
                                           data-balloon="Enable" data-balloon-pos="up">
                                            <i class="fa fa-unlock" aria-hidden="true"></i>
                                        </a>
                                    @endif


                                    <a class="btn btn-danger btn-custom"
                                       href="{{ route("control-panel.users.delete", ["user"=> $user->id]) }}"
                                       data-balloon="Delete" data-balloon-pos="up">
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