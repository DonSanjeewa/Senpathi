@extends('layouts.extended')

@section('content')
    <!--Panel-->
    {{--TODO Complete event creation--}}
    <div class="card">
        <div class="card-header black-skin lighten-1 white-text">
            Create an Event
        </div>
        <div class="card-body">
            {{--Event form--}}
            <form method="POST" action="{{route('events.store')}}">
                {{ csrf_field() }}
                @include('events.partials.form')
            </form>
        </div>
    </div>
    <!--/.Panel-->
@endsection