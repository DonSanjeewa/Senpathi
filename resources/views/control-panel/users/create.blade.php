@extends("layouts.extended")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header primary-color white-text">Create User</h5>
                <div class="card-body">
                    <form>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="form3" class="form-control">
                            <label for="form3">Your name</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="form2" class="form-control">
                            <label for="form2">Your email</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-indigo">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
