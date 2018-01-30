@extends("layouts.base")

@section("pre-content")
    @include("layouts.partials.header")
@endsection

@section("base-content")
<main class="base-content">
    <div class="main-wrapper">
        @yield("content")
    </div>
</main>
@endsection
