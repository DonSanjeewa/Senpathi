@extends("layouts.extended")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Update Role</h5>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{route('control-panel.roles.update', ['role' => $roleRecords->id])}}">
                        {{ csrf_field() }}

                        @include("control-panel.roles.partials.form")

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
