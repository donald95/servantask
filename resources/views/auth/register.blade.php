@extends('samples.main')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Servant Register</title>
    <link rel="icon" href="{{ asset('img/angry-dog.ico') }}" type="image/ico" />
    <link rel="stylesheet" href="{{ asset('css/section-register.css') }}">
    <style media="screen">
        @media (max-width: 575.98px) {}

        @media (max-width: 767.98px) {
            .order-box {
                display: flex;
            }

            #info-register {
                width: 100% !important;
            }

            #info-container {
                width: 100% !important;
            }
        }

        @media (max-width: 991.98px) {
            .order-box {
                display: block;
            }

        }

        @media (max-width: 1199.98px) {}
    </style>

</head>

<body>

    @section('head')
    <nav class="navbar navbar-expand-lg navbar-light sticky-top color-nav" style="box-shadow: 0px 0px 5px 0px rgba(185, 184, 184, 0.726);">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img id="dog-two" src="{{ asset('img/angry-dog.svg') }}" alt="servant" width="25px">
            ServanTask
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSopportedContent" aria-controls="navbarSopportedContent" aria-expanded="false">
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

    <div id="info-container" class="container w-75 order-box">

        <div class="card m-1">
            <section class="border-rounded">
                <h1 class="w-100 p-4 text-white border-rounded" style="background-color: rgba(1, 55, 83, 0.9);">
                    Register and work on your projects
                </h1>
                <div>
                    <p id="info-register" class="p-4" style="width: 400px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quam praesentium repellendus doloremque molestias maiores.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quam praesentium repellendus doloremque molestias maiores.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </section>
        </div>

        <div class="card m-1">
            <section class="border-rounded">
                <h1 class="w-100 p-4 text-white border-rounded" style="background-color: rgba(1, 55, 83, 0.9);">
                    Join to Servant community
                </h1>
                <form class="p-4" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-3 w-100">
                        <div class="input-group-prepend" style="width: 45px;">
                            <span class="input-group-text w-100 button-curved" id="basic-addon1">
                                <i class="icon" style="font-size: 100%;">&#xe800;</i>
                            </span>
                        </div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" aria-label="Recipient's name">

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
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" aria-label="Recipient's email">

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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" aria-label="Recipient's password">

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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Again Password" aria-label="Recipient's password">
                    </div>
                    <button class="btn btn-success btn-block button-curved-two" type="submit">
                        <i class="icon">&#xe804;</i>&nbsp;Register
                    </button>
                </form>
            </section>

        </div>

    </div>

    @endsection
    @section('foot')

    @endsection

</body>

</html>
