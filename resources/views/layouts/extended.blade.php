@extends("layouts.base")

@section("pre-content")
    @include("layouts.partials.header")
@endsection

@section("base-content")
<main>
    <div class="main-wrapper">
        @yield("content")
    </div>
</main>
@endsection
