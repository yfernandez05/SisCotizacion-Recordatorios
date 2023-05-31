<!DOCTYPE html>
<html lang="en">
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
 
</head>
<body class="bg-white">
    @include('layouts.partials._preloader')
    <section class="bg-dark fondo">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-4 p-2 ">
                    
                    
                </div>
                <div class="col-12 text-white p-3">
                    <h1 class="text-center">Consulta tus servicios</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2 p-4 pb-2">
                    <p class="pt-4">Para ver mas informacion sobre los servicios que tiene con nosotros por favor introduzca:
                        la su correo que se encuentra en su recibo: <b>micorreo@gmail.com</b><br>
                        pulsa el botón «Buscar». </p>
                </div>                
            </div>
        </div>
    </section>

    <div id="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <router-view></router-view>
                </div>
                <div class="col-12 text-center mb-3">
                    <img src="{{asset('images/logo.png')}}" alt="estado servicio" style="max-width: 300;"/>                     
                </div>             
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/tabler.js') }}" defer></script>
</body>
</html>