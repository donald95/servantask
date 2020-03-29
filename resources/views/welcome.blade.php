@extends('samples.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's go, you get started now</title>
    <link rel="stylesheet" href="{{ asset('css/section-main.css') }}">
    <style media="screen">
        @media (max-width: 575.98px) {
            #main-image {
                display: none;
            }

            #welcome {
                width: 100%;
                border-radius: 0;
                margin: 0px !important;
                text-shadow: 0.2px 0.2px 4px #454545;
            }

        }

        @media (max-width: 767.98px) {

            #main-image {
                display: none;
            }

            #section-main {
                background-color: white;
                clip-path: unset;
            }

            .section-wrap-shadow {
                filter: none;
            }

            #presentation {
                width: 100%;
                padding: 0;
                margin: 0;
            }

            .navbar {
                background-color: #343a40 !important;
            }

            .navbar li a,
            .navbar .navbar-brand {
                color: #fff !important;
            }

            .navbar-light .navbar-toggler .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgb(255, 255, 255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
            }

            .btn-outline-dark {
                color: #f8f9fa !important;
                border-color: #f8f9fa !important;
            }

            .box-info {
                border: 1px solid #dedede;
                width: 450px;
            }

            #welcome {
                margin: 15px;
            }

            #register {
                border: 1px solid #dedede;
                margin: 15px;
            }

        }

        @media (max-width: 991.98px) {
            #welcome {
                margin: 15px;
            }

            #register {
                border: 1px solid #dedede;
                margin: 15px;
            }
        }

        @media (max-width: 1199.98px) {}
    </style>
</head>

<body>
    @section('head')
    <div class="text-center" style="margin-top: 23px;">
        <h1 class="display-4" style="font-size: 40px;">
            <img id="dog" src="{{ asset('img/angry-dog.svg') }}" alt="servant" style="width: 70px;">&nbsp;ServanTask.com
        </h1>
        <h3 class="font-weight-light">Your dreams, our work.</h3>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top color-nav"
        style="box-shadow: 0px 3px 3px 0px rgba(185, 184, 184, 0.726);">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('img/angry-dog.svg') }}" alt="servant" style="width: 25px;">
        </a>
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
            <a href="{{ route('register') }}" class="btn btn-default btn-light mr-2" role="button"
                aria-pressed="true">Sign up</a>
            <a href="{{ route('login') }}" class="btn btn-outline-dark btn-md" role="button" aria-pressed="true">Sign
                in</a>
        </div>
    </nav>
    @endsection
    @section('body')
    <img id="main-image" src="{{ asset('img/meeting.jpg') }}" alt="aplication-management-project">
    <section class="section-wrap-shadow">

        <section id="section-main" style="width: 100%; height: auto;">

            <div id="presentation" class="row justify-content-md-center" style="width: 100%; margin: auto;">


                <div id="welcome" class="col-md" style="background-color: rgba(51, 51, 51, 0.7);">
                    <div class="container p-4">
                        <div class="w-75" style="margin: auto;">
                            <h1 class="text-center text-light">Welcome to ServanTask</h1>
                            <p id="welcome-text" class="text-light text-justify" style="font-size: 16px;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Ea facere excepturi doloribus error omnis ut ab vel incidunt nemo
                                laboriosam? Veritatis perspiciatis sint distinctio nam? Illo dolor
                                dolore porro laborum. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Ea facere excepturi doloribus error omnis ut ab vel incidunt nemo
                                laboriosam? Veritatis perspiciatis sint distinctio nam? Illo dolor
                                dolore porro laborum. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a class="btn btn-info btn-sm" href="">Let's get started</a>
                        </div>
                    </div>
                </div>

                <div id="register" class="col-md-4 bg-light rounded p-4">
                    <div class="card mb-3 width-card rounded">
                        <section class="">
                            <h1 class="w-100 p-3 text-white rounded-top text-center"
                                style="background-color: rgb(1, 45, 83);">
                                Sing up and enjoy
                            </h1>
                            <p class="p-3 paragraph">
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
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Name" aria-label="Recipient's name">

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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="E-mail" aria-label="Recipient's email">

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
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Password" aria-label="Recipient's password">

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
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Again Password" aria-label="Recipient's password">
                        </div>
                        <button class="btn btn-success btn-block button-curved-two" type="submit">
                            <i class="icon">&#xe804;</i>&nbsp;Register
                        </button>
                    </form>
                </div>
            </div>


            <div class="row p-1" style="justify-content: center; align-items: center;">

                <div class="box-info bg-light m-4" style="font-size: 15px; width: 300px;">
                    <h5 class="pl-4 pr-4 pt-4">Get Started With Us</h5>
                    <hr>
                    <p class="pl-4 pr-4 paragraph">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                    </p>
                    <small class="bottom-footer text-center">
                        <a class="text-primary dash-text-intolink" href="">How can help you?</a>
                    </small>
                </div>

                <div class="box-info bg-light m-4" style="font-size: 15px; width: 300px;">
                    <h5 class="pl-4 pr-4 pt-4">Create A Project</h5>
                    <hr>
                    <p class="pl-4 pr-4 paragraph">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                    </p>
                    <small class="bottom-footer text-center">
                        <a class="text-primary dash-text-intolink" href="">Creat a project</a>
                    </small>
                </div>

                <div class="box-info bg-light m-4" style="font-size: 15px; width: 300px;">
                    <h5 class="pl-4 pr-4 pt-4">Manage Your Projects</h5>
                    <hr>
                    <p class="pl-4 pr-4 paragraph">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                    </p>
                    <small class="bottom-footer text-center">
                        <a class="text-primary dash-text-intolink" href="">Begin to manage your tasks </a>
                    </small>
                </div>
                <div class="box-info bg-light m-4" style="font-size: 15px; width: 300px;">
                    <h5 class="pl-4 pr-4 pt-4">Get Reminder</h5>
                    <hr>
                    <p class="pl-4 pr-4 paragraph">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                    </p>
                    <small class="bottom-footer text-center">
                        <a class="text-primary dash-text-intolink" href="">Go to settings to notify</a>
                    </small>
                </div>
            </div>
        </section>
    </section>
    <br><br><br>
    <div class="container p-2" style="height: auto;">
        <div class="row">
            <div class="container col-sm p-4 center-bubbles rounded pattern-color" style="height: 700px; width: 50%;">
                <div class="chat">
                    <div style="width: 120px;"></div>
                    <div class="talk-bubble round border-box tri-right-me right-top color-bubble-me">
                        <small class="ml-3 font-weight-bold" style="color: rgb(164, 164, 164);">Sara Andea Melo</small>
                        <div class="talktext-me">
                            <p>Hey, Where is the plan of tomorrow?</p>
                        </div>
                        <small style="color: rgb(164, 164, 164); margin-left: 180px; font-size: 11px;">December 4th,
                            2019</small c>
                    </div>
                    <div class="profile-container margin-left-profile">
                        <img src="{{ asset('img/avatar/avr002.jpg') }}" class="profile" alt="">
                    </div>
                </div>
                <div class="chat">
                    <div class="profile-container margin-right-profile">
                        <img src="{{ asset('img/avatar/avr003.jpg') }}" class="profile" alt="">
                    </div>
                    <div class="talk-bubble round border-box tri-right-you right-top color-bubble-you text-white">
                        <small class="ml-3 font-weight-bold" style="color: rgb(164, 164, 164);">惨めな雌犬</small>
                        <div class="talktext-you">
                            <p>明日の活動はどうですか？</p>
                        </div>
                        <small style="color: rgb(164, 164, 164); margin-left: 180px; font-size: 11px;">December 4th,
                            2019</small c>
                    </div>
                    <div style="width: 120px;"></div>
                </div>
                <div class="chat">
                    <div class="profile-container margin-right-profile">
                        <img src="{{ asset('img/avatar/avr004.jpg') }}" class="profile" alt="">
                    </div>
                    <div class="talk-bubble round border-box tri-right-you right-top color-bubble-you text-white">
                        <small class="ml-3 font-weight-bold" style="color: rgb(164, 164, 164);">Rogelio Guarito</small>
                        <div class="talktext-you">
                            <p>El proyecto de mañana estará listo, tenemos que hablar con las partes interesadas</p>
                        </div>
                        <small style="color: rgb(164, 164, 164); margin-left: 180px; font-size: 11px;">December 4th,
                            2019</small c>
                    </div>
                    <div style="width: 120px;"></div>
                </div>
                <div class="chat">
                    <div style="width: 120px;"></div>
                    <div class="talk-bubble round border-box tri-right-me right-top color-bubble-me">
                        <small class="ml-3 font-weight-bold" style="color: rgb(164, 164, 164);">Sara Andea Melo</small>
                        <div class="talktext-me">
                            <p>Wofür stehen wir heute an?</p>
                        </div>
                        <small style="color: rgb(164, 164, 164); margin-left: 180px; font-size: 11px;">December 4th,
                            2019</small c>
                    </div>
                    <div class="profile-container margin-left-profile">
                        <img src="{{ asset('img/avatar/avr002.jpg') }}" class="profile" alt="">
                    </div>
                </div>
                <form class="form-inline mt-2 form-width">
                    <input type="text" class="form-control mr-2" style="width: 80%;" placeholder="Message..." disabled>
                    <div class="button-send">
                        <img src="{{ asset('img/send-button.svg') }}" class="img-send" alt="">
                    </div>
                    <div class="button-send">
                        <img src="{{ asset('img/voice-message-button.svg') }}" class="img-voice-note" alt="">
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <div class="container">
                    <div class="w-75" style="margin: auto;">
                        <h1 class="text-center">Exchange messages related to your projects</h1>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ea facere excepturi doloribus error omnis ut ab vel incidunt nemo
                            laboriosam? Veritatis perspiciatis sint distinctio nam? Illo dolor
                            dolore porro laborum. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Ullam amet laborum deserunt at reprehenderit illum,
                            accusamus magni ipsum neque vero sit. Consequatur commodi
                            delectus soluta eius maiores hic ut officia.
                        </p>
                        <a class="btn btn-info btn-sm" href="">Let's get started</a>
                    </div>
                    <div class="w-75 pt-5" style="margin: auto;">
                        <h1 class="text-center">Share files</h1>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ea facere excepturi doloribus error omnis ut ab vel incidunt nemo
                            laboriosam? Veritatis perspiciatis sint distinctio nam? Illo dolor
                            dolore porro laborum. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a class="btn btn-info btn-sm" href="">Let's share</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('foot')

    @endsection
</body>

</html>
