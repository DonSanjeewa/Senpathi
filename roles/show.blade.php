@extends('layouts.extended')

@section('content')
    @if(!empty($roleRecords))
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header gold white-text">Roles</h5>
                    <div class="card-body">
                        <h5>Role</h5>
                        <table id="all-events" class="table table-bordered" cellspacing="0" width="100%">
                            <tr>
                                <th>Name</th>
                                <td>{{$roleRecords->name}}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{$roleRecords->slug}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$roleRecords->description}}</td>
                            </tr>
                        </table>
                        <h5>Permissions</h5>
                        @foreach($permissions as $key=>$permission)
                            <div style="width: 25%; display: inline-block; float: left">
                                <input type="checkbox" id="checkbox-{{ $permission->id }}" name="permissions[{{ $permission->id }}]" {{ ((in_array($permission->id, $permission_ids)) ? 'checked' : '') }} disabled>
                                <label for="checkbox-{{ $permission->id }}">
                                    {{ $permission->name }}
                                    @if($permission->description != "")
                                       ( {{ $permission->description }} )
                                    @endif
                                </label>
                            </div>
                        @endforeach
                        <div>
                            <a class="btn btn-primary btn-md blue white-text" href="{{route('control-panel.roles.edit', ['role' => $roleRecords->id])}}" role="button">
                                <i class="fa fa-pencil ml-2"></i>Edit Role
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert d-block bg-danger form-error">
            <ul>
                <li>
                    <span class="text-white">No Role found with the given id</span>
                </li>
            </ul>
        </div>
    @endif
@endsection