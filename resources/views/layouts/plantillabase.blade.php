<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title',config('app.name'))</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- VITE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    @vite(['resources/sass/app.scss'])
    <!-- CSS -->
    @yield('css')
</head>
<body>
    <div class="wrapper">
        @include('layouts.app.nav')
        <div class="main">
            @include('layouts.app.usernav')
            @include('layouts.app.content')
            @include('layouts.app.footer')
        </div>
	</div>
    <!-- VITE Scripts -->
    @vite(['resources/js/app.js'])
    <!-- Blade Scripts Load -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/functions.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/sweetalert2@11.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.mask.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/chart.js')}}" type="text/javascript"></script>

    @stack('scripts')
</body>
</html>
