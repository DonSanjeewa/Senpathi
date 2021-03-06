<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name' , 'School Management System') }}</title>

    @include("layouts.includes.styles")

    @yield("custom-styles")

</head>
<body class="fixed-sn navy-blue-skin">



    @yield("pre-content")
    <div class="container-fluid">
        @yield("base-content")
    </div>

    @yield("post-content")

    @include("layouts.includes.scripts")

    @yield("custom-scripts")
    <script>
        $(".button-collapse").sideNav();
    </script>
</body>
</html>
