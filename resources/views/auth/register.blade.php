<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <title>V2O | Register</title>
</head>

<body class="login-body">
<div class="login-container">
            <img class="login-img" alt="V2ologo" src ="{{ asset('img/v2ologo.png') }}">

            <div class="login-form-container">

                    <form class="login-form" method="POST" action="{{ route('register') }}">
                        @csrf

                         <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" class="login-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="login-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="login-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="login-input form-control" name="password_confirmation" required placeholder="Confirm Password">
                            </div>
                        </div>

                                <button type="submit" class="login-btn">
                                    {{ __('Register') }}
                                </button>
                    </form>
                <h4>Already have an account? <a class="register" href="{{ route('login') }}">{{ __('Login Here') }}</a></h4>

    </div>
</div>
    </body>
</html>
