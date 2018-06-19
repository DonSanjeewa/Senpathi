@extends("layouts.extended")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Create Student</h5>
                <div class="card-body">
                    <form method="post" action="{{ route("academic.teachers.store") }}">

                        @include("academic.students.partials.form")

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
