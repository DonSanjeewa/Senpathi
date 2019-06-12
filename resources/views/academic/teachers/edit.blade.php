@extends("layouts.extended")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Edit Teacher</h5>
                <div class="card-body">
                    <form method="post" action="{{ route('academic.teachers.update', ['teacher' => $allRecords->id]) }}">

                        @include("academic.teachers.partials.form")

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
