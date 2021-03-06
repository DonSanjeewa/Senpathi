@extends('layouts.extended')

@section('content')
    <!--Panel-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Manage Period</h5>
                <div class="card-body">
                    <form method="POST" action="{{route('academic.timetables.update')}}">
                        {{ csrf_field() }}
                        @include('timetable.partials.period')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Panel-->
@endsection