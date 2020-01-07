@extends('layouts.app')

@section('content')

        <div class="login-form">

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="text-center">Log in</h2>
        <div class="form-group">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"" name=" email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="pull-left checkbox-inline" for="remember">
                {{ __('Remember Me') }}
            </label>
            @if (Route::has('password.request'))
            <a class="pull-right" href="{{ route('password.request') }}">
                {{ __('Forgot Password?') }}
            </a>
            @endif
        </div>
    </form>

</div>

<style type="text/css">
    .login-form {
        width: 340px;
        margin: 50px auto;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }

</style>

@endsection
