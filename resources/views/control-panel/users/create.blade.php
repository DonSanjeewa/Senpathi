@extends("layouts.extended")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header blue white-text">Create User</h5>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route("control-panel.users.store") }}">
                        @include("control-panel.users.partials.form")
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
