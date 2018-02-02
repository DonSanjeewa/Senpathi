@extends('layouts.extended')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header blue white-text">Roles</h5>
                <div class="card-body">
                    <table id="permissions" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->slug}}</td>
                                <td>{{$role->description}}</td>
                                {{--TODO add action mapping for buttons--}}
                                <td>
                                    <a href="" class="btn btn-primary btn-custom">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-warning btn-custom">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-danger btn-custom">
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