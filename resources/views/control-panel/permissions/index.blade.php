@extends('layouts.extended')

@section('content')
    <table id="permissions" class="table table-bordered data-table-custom" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Permissions</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Permissions</th>
            <th>Actions</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td>{{$permission->id}}</td>
                <td>{{$permission->name}}</td>
                <td>{{$permission->description}}</td>
                <td>{{$permission->permissions}}</td>
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
@endsection