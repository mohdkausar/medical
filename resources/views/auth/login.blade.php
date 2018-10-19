@extends('layouts.app')

@section('content')
<section class="login-section">
    <div class="login">
        <div class="container">
            <div class="login-form" style="float: none;margin: 0 auto;">
                <div class="data-form">
                    <a href="#" class="logo"><img src="img/logo-simple.png" alt="logo" class="img-responsive"></a>
                    <form class="form-login" name="login_form" id="login_form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="icon-data">
                            <i class="fa fa-user"></i>
                        </div>
                        <input id="email" type="email" placeholder="Enter your email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <div class="icon-data">
                            <i class="fa fa-key"></i>
                        </div>
                        <input id="password" type="password" placeholder="Enter your password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="icon-data">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        </div>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                        <button type="submit" class="btn btn-default" role="button">{{ __('Login') }}</button>
                    </form>
                    <a href="register" class="btn btn-red register" role="button">Create a new account</a>
                    <span class="help">
                        <a href="{{ route('password.request') }}">Forgot Password</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
