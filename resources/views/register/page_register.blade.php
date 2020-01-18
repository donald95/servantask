@extends('samples.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Servant Register</title>
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
        <a class="navbar-brand" href="">ServanTask.net</a>
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
            <a href="form-register.html" class="btn btn-outline-dark btn-md mr-2" role="button" aria-pressed="true">Sign
                up</a>
            <a href="login.html" class="btn btn-outline-dark btn-md" role="button" aria-pressed="true">Sign in</a>
        </div>
    </nav>
    @endsection

    @section('body')
    <ol class="container breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item">
            Register
        </li>
    </ol>
    <div class="container w-75 pl-5 pr-5 pb-5 pt-2 order-box">
        <div class="card mr-3 width-card">
            <section class="border-rounded">
                <h1 class="w-100 p-3 text-white border-rounded" style="background-color: rgb(1, 45, 83);">
                    Join to Servant community
                </h1>
                <p class="p-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quam praesentium repellendus doloremque molestias maiores.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quam praesentium repellendus doloremque molestias maiores.
                </p>
            </section>
        </div>
        <form class="form-register" action="projects-page.html">
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon1">
                        <i class="icon">&#xe803;</i>
                    </span>
                </div>
                <input class="form-control" type="text" placeholder="Username" aria-label="Recipient's username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon2">
                        <i class="icon">&#xe800;</i>
                    </span>
                </div>
                <input class="form-control" type="text" placeholder="Name" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon3">
                        <i class="icon">&#xe800;</i>
                    </span>
                </div>
                <input class="form-control" type="text" placeholder="Last name" aria-label="Recipient's username"
                    aria-describedby="basic-addon3">
            </div>
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon4">
                        <i class="icon">&#xf0e0;</i>
                    </span>
                </div>
                <input class="form-control" type="email" placeholder="E-mail" aria-label="Recipient's username"
                    aria-describedby="basic-addon4">
            </div>
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon5">
                        <i class="icon">&#xe801;</i>
                    </span>
                </div>
                <input class="form-control" type="password" placeholder="Password" aria-label="Recipient's username"
                    aria-describedby="basic-addon5">
            </div>
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend" style="width: 45px;">
                    <span class="input-group-text w-100 button-curved" id="basic-addon6">
                        <i class="icon">&#xe801;</i>
                    </span>
                </div>
                <input class="form-control" type="password" placeholder="Again Password"
                    aria-label="Recipient's username" aria-describedby="basic-addon6">
            </div>
            <button class="btn btn-success btn-block button-curved-two">
                <i class="icon">&#xe802;</i>&nbsp;Register
            </button>
        </form>
    </div>

    @endsection
    @section('foot')

    @endsection

</body>

</html>
