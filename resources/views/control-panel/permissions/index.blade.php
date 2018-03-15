@extends('layouts.extended')

@section('content')
    <div class="row">
        <div class="col-md-12">
        <a href="{{ route("control-panel.permissions.create") }}"><button type="button"  style="margin-left: 93%;" class="btn btn-success btn-sm">Create</button></a>
            <div class="card">
                <h5 class="card-header gold white-text">Permissions</h5>
                <div class="card-body">
                    <table id="permissions" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Route Name</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{$permission->id}}</td>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->slug}}</td>
                                <td>{{$permission->route_name}}</td>
                                <td>{{$permission->description}}</td>
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