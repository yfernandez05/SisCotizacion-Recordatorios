<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('head')
        @include('layouts.partials._head')
        <!-- Scripts -->
        <script src="{{ asset('js/tabler.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/tabler.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('css/style_font.css') }}" rel="stylesheet">
    @show
    

    @yield('style')
    <style>
        body{
            overflow-y:auto !important;
        }
    </style>
</head>
<body>
    <div>
        @include('layouts.partials._preloader')
        <div id="main-wrapper">
            <main class="">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
