<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('head')
        @include('layouts.partials._head')      

        <!-- Fonts -->
        <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

        <!-- Styles -->
        <link href="{{ asset('css/tabler.css') }}" rel="stylesheet">
        <link href="{{ asset('css/demotabler.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style_font.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tabler-vendors.css') }}" rel="stylesheet">
    @show
    

    @yield('style')
</head>
<body>
    <div>
        @include('layouts.partials._preloader')
        <div id="main-wrapper">
            @include('layouts.partials._header')
            
            @include('layouts.partials._siderbar')
            
            <main class="page-body">
                @yield('content')
            </main>
    
            <div class="footer-cont">
                @include('layouts.partials._footer')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/tabler.js') }}" defer></script>

    @yield('js')
    
</body>
</html>
