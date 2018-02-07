@extends('layouts.base')

@section('base-content')

<div class="row login-form-container">
    <div class="col-md-12 mb-12">

        <section class="py-3">
            <!--Section heading-->
            <!-- //TODO school logo? -->
            <h2 class="font-bold text-center h1 py-5"></h2>
            <!--Section description-->

            <div class="row">

                <!--Grid column-->
                {{--//TODO responsiveness--}}
                <div class="col-lg-6 mb-4 offset-3">

                    <!--Form with header-->
                    <div class="card">

                        <div class="card-body">
                            <!--Header-->
                            <div class="form-header blue accent-1">
                                <h3>
                                    <i class="fa fa-lock"></i> Login </h3>
                            </div>
                            <br>

                            <form method="post" action="{{ route("login.login") }}">
                            <!--Body-->
                            {{ csrf_field() }}

                            <div class="md-form{{ $errors->has('username') ? ' has-error' : '' }}">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="form-name" class="form-control" name="username"  value="{{ old('username') }}" required>
                                <label for="form-name">Username</label>
                            </div>

                            <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="form-password" name="password" class="form-control" required>
                                <label for="form-password">Password</label>

                            </div>

                            <div class="md-form" style="margin-top: -25px">
                                <input type="checkbox" id="form-remember-me" name="remember" class="form-control" {{ old('remember') ? 'checked' : '' }}>
                                <label for="form-remember-me" style="padding-left: 50px">Remember Me</label>
                            </div>


                                {{--//TODO Remove the following and spereate into a partial--}}

                            @include("common.partials.form-errors")


                            <div class="text-center">
                                <button class="btn btn-light-blue" type="submit">Login</button>
                            </div>

                            </form>

                        </div>

                    </div>
                    <!--Form with header-->

                </div>

            </div>

        </section>

    </div>
</div>

@endsection
