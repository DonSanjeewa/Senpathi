<div class="row">
    <div class="col-md-6">

        {{ csrf_field() }}

        <div class="md-form{{ $errors->has('fname') ? ' has-error' : '' }}">
            <i class="fa fa-address-card prefix grey-text"></i>
            <input type="text" id="fname" class="form-control" name="fname" value="{{ old("fname") }}" required>
            <label for="fname">First name</label>
        </div>

        <div class="md-form{{ $errors->has('lname') ? ' has-error' : '' }}">
            <i class="fa fa-address-card prefix grey-text"></i>
            <input type="text" id="lname" class="form-control" name="lname" value="{{ old("fname") }}" required>
            <label for="lname">Last name</label>
        </div>

        <div class="md-form{{ $errors->has('username') ? ' has-error' : '' }}">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="username" class="form-control" name="username" value="{{ old("fname") }}" required>
            <label for="username">Username</label>
        </div>

        <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
            <i class="fa fa-lock prefix grey-text"></i>
            <input type="password" id="password" class="form-control" name="password">
            <label for="password">Password</label>
        </div>

        <div class="md-form">
            <i class="fa fa-none prefix grey-text"></i>
            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
            <label for="password_confirmation">Confirm Password</label>
        </div>

        <section>
            <select class="mdb-select{{ $errors->has('role') ? ' has-error' : '' }}" name="role">
                <option value="" disabled selected>Role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </section>


    </div>

    <div class="col-md-3">
        <div class="mdb-lightbox">
            <figure>
                <img src=""
                     class="img-fluid">
            </figure>
        </div>
    </div>


    <div class="col-md-3">
        <div class="file-upload{{ $errors->has('picture') ? ' has-error' : '' }}">
            <label for="upload">Upload image</label>
            <input type="file" id="picture" name="picture">
        </div>
    </div>

    @include("common.partials.form-errors")

</div>
<div class="text-right">
    <button class="btn btn-success">Save</button>
</div>