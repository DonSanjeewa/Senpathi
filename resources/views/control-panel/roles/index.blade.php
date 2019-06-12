@extends('layouts.extended')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route("control-panel.roles.create") }}"><button type="button"  style="margin-left: 93%;" class="btn btn-success btn-sm">Create</button></a>
            <div class="card">
                <h5 class="card-header gold white-text">Roles</h5>
                <div class="card-body">
                    <table id="permissions" class="table table-striped data-table-custom" cellspacing="0" width="100%">
                        <thead style="background-color:#d2d6d9">
                        <tr>
                            <th><b>Id</b></th>
                            <th><b>Name</b></th>
                            <th><b>Slug</b></th>
                            <th><b>Description</b></th>
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
                                    <a href="{{route('control-panel.roles.show', ['role' => $role->id])}}" class="btn btn-primary btn-custom">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('control-panel.roles.edit', ['role' => $role->id])}}" class="btn btn-warning btn-custom">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('control-panel.roles.delete', ['role' => $role->id])}}" class="btn btn-danger btn-custom">
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