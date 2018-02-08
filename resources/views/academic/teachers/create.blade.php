@extends("layouts.extended")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header blue white-text">Create Teacher</h5>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route("academic.teachers.store") }}">

                        @include("academic.teachers.partials.form")

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
