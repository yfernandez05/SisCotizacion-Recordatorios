@extends('layouts.auth')
@section('title', '- Restablecimineto de contraseña')
@section('style')
    <style>
        .page{
            height: 100vh;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ route('password.request') }}" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('images/logo.png') }}" height="55" alt=""></a>
            </div>

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form class="card card-md" method="POST" action="{{ route('password.email') }}">
            @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('Restablecer la contraseña') }}</h2>
                    <p class="text-muted mb-4">Enter your email address and your password will be reset and emailed to you.</p>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Correo electrónico') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Ingrese su correo" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button class="btn btn-primary w-100" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M3 7l9 6l9 -6" /></svg>
                            {{ __('Enviar restablecimiento de contraseña') }}
                        </button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                <p>¿Ya tienes una cuenta? <a href="{{url('/login')}}" class="t-melon m-l-5"><b>{{ __('Inicia Sesión') }}</b></a></p>
            </div>
        </div>
    </div>
</div> 
@endsection
