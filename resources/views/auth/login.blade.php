@extends('layouts.plantillalogin')

@section('bodystyle')
login-page
@endsection

@section('boxstyle')
login-box
@endsection

@section('content')
    <!-- /.login-logo -->
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <a href="{{ route('login') }}" class="h1"><img style="width: 150px; margin: auto 30px;" src="{{ asset('img/logo.png') }}"></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Acceder para iniciar sesión</p>

                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <div class="row input-group mb-3">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="{{ __('Username') }}" required autofocus>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4"></div>
                        <!-- /.col -->
                    </div>
                    <div class="social-auth-links text-center mt-2 mb-3">
                        <button type="submit" class="btn btn-block btn-danger"><strong>{{ __('Login') }}  <i class="fa-solid fa-right-to-bracket"></i></strong></button>

                    </div>

                </form>

            </div>
            <!-- /.card-body -->
        </div>
    <!-- /.card -->
@endsection
