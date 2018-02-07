@extends('layouts.extended')

@section('content')
    <!--Panel-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header blue white-text">Create Timetable</h5>
                <div class="card-body">
                    <form method="POST" action="{{route('timetables.store')}}">
                        {{ csrf_field() }}
                        @include('timetable.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Panel-->
@endsection