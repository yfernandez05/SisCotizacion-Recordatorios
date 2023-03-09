@extends('layouts.auth')
@section('title', '- Inicio de Sesión')

@section('style')
<style>
  .theme-dark .row.g-0.flex-fill.bg-white{
    /* --tblr-white-rgb : */
    background-color: #1a2234 !important;
  }
  .row.g-0.flex-fill.bg-white{
    height: 100vh;
  }
</style>
@endsection


@section('content')
    <div class="row g-0 flex-fill bg-white">
      <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
        <div class="container container-tight my-5 px-lg-5">
          <div class="text-center mb-4">
            <a href="{{url('/')}}" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('images/logo.png') }}" height="55" alt=""></a>
          </div>
          <h2 class="h3 text-center mb-3">
            Ingrese a su cuenta
          </h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <label for="email" class="col-form-label">{{ __('Correo electronico') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="mb-2">
              <label class="form-label">
                {{ __('Contraseña') }}
                <span class="form-label-description">
                  @if (Route::has('password.request'))
                      <a class="" href="{{ route('password.request') }}">
                          {{ __('¿Olvidaste tu contraseña?') }}
                      </a>
                  @endif
                </span>
              </label>
              
              <div class="input-group input-group-flat">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Su contraseña">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Mostrar Constraseña" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="mb-2">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Recuérdame') }}
                  </label>
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">
                  {{ __('Iniciar Sesión') }}
              </button>
            </div>
          </form>
          {{-- <div class="text-center text-muted mt-3">
            ¿No tienes una cuenta? <a href="{{url('/register')}}" class="text-primary m-l-5"><b>{{ __('Register') }}</b></a>
          </div> --}}
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100 login-cover"></div>
      </div>
    </div>
@endsection
