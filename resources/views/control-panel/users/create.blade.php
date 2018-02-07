@extends("layouts.extended")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header primary-color white-text">Create User</h5>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route("control-panel.users.store") }}">
                        <div class="row">
                            <div class="col-md-6">

                                {{ csrf_field() }}

                                <div class="md-form{{ $errors->has('fname') ? ' has-error' : '' }}">
                                    <i class="fa fa-address-card prefix grey-text"></i>
                                    <input type="text" id="fname" class="form-control" name="fname" required>
                                    <label for="fname">First name</label>
                                </div>

                                <div class="md-form{{ $errors->has('lname') ? ' has-error' : '' }}">
                                    <i class="fa fa-address-card prefix grey-text"></i>
                                    <input type="text" id="lname" class="form-control" name="lname" required>
                                    <label for="lname">Last name</label>
                                </div>

                                <div class="md-form{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="username" class="form-control" name="username" required>
                                    <label for="username">Username</label>
                                </div>

                                <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" id="email" class="form-control" name="email">
                                    <label for="email">Email</label>
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

                            </div>

                            <div class="col-md-3">
                                <div class="mdb-lightbox">
                                    <figure>
                                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg"
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

                        </div>
                        <div class="text-right">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
