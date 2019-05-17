@extends("layouts.extended")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Edit User</h5>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('control-panel.users.update', ['user' => $records->id]) }}">
                        @include("control-panel.users.partials.form")
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection