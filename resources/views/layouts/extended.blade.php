@extends("layouts.base")

@section("pre-content")
    @include("layouts.partials.header")
@endsection


<main>
    <div class="main-wrapper">
        @yield("content")
    </div>
</main>

