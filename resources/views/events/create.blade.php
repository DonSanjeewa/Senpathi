@extends('layouts.extended')

@section('content')
    <!--Panel-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header gold white-text">Create Event</h5>
                <div class="card-body">
                    <form method="POST" action="{{route('events.store')}}">
                        {{ csrf_field() }}
                        @include('events.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/.Panel-->
@endsection