<div class="row">
    <div class="col-md-6">
        {{ csrf_field() }}

        <div class="md-form{{ $errors->has('name') ? ' has-error' : '' }}">
            <i class="fa fa-road prefix grey-text"></i>
            <input type="text" id="fname" class="form-control" name="name" value="{{ ($hasData ? $roleRecords->name : old('name')) }}" >
            <label for="fname">Name</label>
        </div>

    </div>

    <div class="col-md-6">
        <div class="md-form{{ $errors->has('slug') ? ' has-error' : '' }}">
            <i class="fa fa-address-card prefix grey-text"></i>
            <input type="text" id="slug" class="form-control" name="slug" value="{{ ($hasData ? $roleRecords->slug : old('slug')) }}" >
            <label for="slug">Slug</label>
        </div>
    </div>

    <div class="col-md-12">
        <div class="md-form{{ $errors->has('description') ? ' has-error' : '' }}">
            <i class="fa fa-pencil prefix grey-text"></i>
            <textarea type="text" id="description" class="md-textarea" style="height: 100px"
                      name="description">{{ ($hasData ? $roleRecords->description : old('description')) }}</textarea>
            <label for="description">Description</label>
        </div>

    </div>

    <div class="col-md-12">

        <h5>All Available Permissions</h5>
        @foreach($permissions as $key=>$permission)

            <div class="form-group permission-item" style="width: 25%; display: inline-block; float: left">
                <input type="checkbox" id="checkbox-{{ $permission->id }}" name="permissions[{{ $permission->id }}]" {{ (($hasData && (in_array($permission->id, $permission_ids))) ? 'checked' : '') }}>
                <label for="checkbox-{{ $permission->id }}">
                    {{ $permission->name }}
                    @if($permission->description != "")
                        ( {{ $permission->description }} )
                    @endif
                </label>
            </div>

        @endforeach

    </div>

</div>

@include("common.partials.form-errors")

<div class="text-right">
    <button class="btn btn-success">Save</button>
</div>