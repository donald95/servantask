<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login and enjoy working</title>
    <link rel="icon" href="{{ asset('img/angry-dog.ico') }}" type="image/ico" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
    <style media="screen">
        @media (max-width: 575.98px) {}

        @media (max-width: 767.98px) {
            form {
                width: 100% !important;
            }
        }

        @media (max-width: 991.98px) {}

        @media (max-width: 1199.98px) {}
    </style>
</head>

<body>
    <div class="align-icon">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('img/angry-dog.svg') }}" alt="servant" style="width: 60px;">
        </a>
    </div>
    <div class="container" style="display: flex;
    justify-content: center;
    align-items: center;">
        <form style="width: 40%;" name='login' action="{{ route('login') }}" method='POST' enctype="multipart/form-data">
            @csrf
            <fieldset class="border rounded p-4 m-1" style="height: auto;">
                <legend id="head-text">Sign in to ServanTask</legend>
                <table border='0' align='center'>
                    <tr>
                        <td>
                            <div class="input-group mb-3 w-100">
                                <div class="input-group-prepend" style="width: 45px;">
                                    <span title="User or e-mail" class="input-group-text w-100 button-curved">
                                        <i class="icon">&#xe800;</i>
                                    </span>
                                </div>
                                <input id="email" name="email" type="email" class="form-control form-control-md @error('email') is-invalid @enderror" placeholder="E-mail" aria-label="Recipient's email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-group mb-3 w-100">
                                <div class="input-group-prepend" style="width: 45px;">
                                    <span title="User's password" class="input-group-text w-100 button-curved">
                                        <i class="icon">&#xe801;</i>
                                    </span>
                                </div>
                                <input id="password" name="password" type="password" class="form-control form-control-md @error('password') is-invalid @enderror" placeholder="Password" aria-label="Recipient's username" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn btn-block form-control-md" type="submit">
                                <div title="User's password">
                                    <i class="icon">&#xe804;</i>&nbsp;Sign in
                                </div>
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                <small>{{ __('Forgot Your Password?') }}</small>
                            </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            <small> {{ __('Remember Me') }}</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <div class="border rounded p-4 m-1" style="height: auto;">
                <p class="m-2 text-center">Don't you have an account? <a href="{{ route('register') }}">Create an
                        account.</a></p>
            </div>
            <footer class="p-4 m-1 text-center" style="height: auto;">
                <small><a class="m-4" href="">About us</a></small>
                <small><a class="m-4" href="">Docs</a></small>
                <small><a class="m-4" href="">Forum</a></small>
            </footer>
        </form>

    </div>

    <script type="text/javascript" src="{{asset('js/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
