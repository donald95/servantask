{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}


@extends('samples.main')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Servant Register</title>
    <link rel="stylesheet" href="{{ asset('css/section-register.css') }}">
    <style media="screen">
        @media (max-width: 575.98px) {}

        @media (max-width: 767.98px) {
            .order-box {
                display: flex;
            }

            .width-card {
                width: 35%;
            }

            .form-register {
                width: 65%;
            }
        }

        @media (max-width: 991.98px) {
            .order-box {
                display: block;
            }

            .width-card {
                width: 100%;
                margin-bottom: 20px;
            }

            .form-register {
                width: 100%;
            }
        }

        @media (max-width: 1199.98px) {}
    </style>

</head>

<body>

    @section('head')
    <nav class="navbar navbar-expand-lg navbar-light sticky-top color-nav"
        style="box-shadow: 0px 0px 5px 0px rgba(185, 184, 184, 0.726);">
        <a class="navbar-brand" href="{{ route('welcome') }}">ServanTask.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSopportedContent"
            aria-controls="navbarSopportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSopportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="">Forum</a></li>
                <li class="nav-item"><a class="nav-link" href="">About us</a></li>
            </ul>
            <a href="{{ route('login') }}" class="btn btn-outline-dark btn-md" role="button" aria-pressed="true">Sign
                in</a>
        </div>
    </nav>
    @endsection

    @section('body')
    <nav class="container pt-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>

    <div class="container w-75 pl-5 pr-5 pb-5 pt-2 order-box">
        <div class="card mr-3 width-card">
            <section class="border-rounded">
                <h1 class="w-100 p-3 text-white border-rounded" style="background-color: rgb(1, 45, 83);">
                    Join to Servant community
                </h1>
                <p class="p-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quam praesentium repellendus doloremque molestias maiores.
                </p>
            </section>
        </div>
        <form class="form-register" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon1">
                        <i class="icon" style="font-size: 100%;">&#xe800;</i>
                    </span>
                </div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name"
                    aria-label="Recipient's name">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon4">
                        <i class="icon" style="font-size: 100%;">&#xe802;</i>
                    </span>
                </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail"
                    aria-label="Recipient's email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon5">
                        <i class="icon" style="font-size: 100%;">&#xe801;</i>
                    </span>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Password"
                    aria-label="Recipient's password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon6">
                        <i class="icon">&#xe801;</i>
                    </span>
                </div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Again Password" aria-label="Recipient's password">
            </div>
            <button class="btn btn-success btn-block button-curved-two" type="submit">
                <i class="icon">&#xe804;</i>&nbsp;Register
            </button>
        </form>
    </div>

    @endsection
    @section('foot')

    @endsection

</body>

</html>
