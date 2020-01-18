@extends('samples.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's go, you get started now</title>
    <link rel="stylesheet" href="{{ asset('css/section-main.css') }}">
</head>

<body>
    @section('head')
    <div class="text-center">
        <h1 class="display-4">
            ServanTask.net
        </h1>
        <h3 class="font-weight-light">Your dreams, our work.</h3>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top color-nav"
        style="box-shadow: 0px 3px 3px 0px rgba(185, 184, 184, 0.726);">
        <a class="navbar-brand" href="index.html">ServanTask.net</a>
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
            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-md mr-2" role="button" aria-pressed="true">Sign up</a>
            <a href="{{ route('login') }}" class="btn btn-outline-dark btn-md" role="button" aria-pressed="true">Sign in</a>
        </div>
    </nav>
    @endsection
    @section('body')
    <img id="main-image" src="{{ asset('img/meeting.jpg') }}" alt="aplication-management-project">
    <section class="section-wrap-shadow">
        <section id="section-main" style="width: 100%; height: 100%;">
            <div class="row p-1" style="justify-content: center; align-items: center;">
                <div class="col-sm-4 p-0 m-2 font-weight-light bg-light" style="font-size: 15px;">
                    <h5 class="pl-4 pr-4 pt-4">Get Started With Us</h5>
                    <hr>
                    <p class="pl-4 pr-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                    </p>
                    <small class="bottom-footer text-center">
                        <a class="text-primary dash-text-intolink" href="">How can help you?</a>
                    </small>
                </div>
                <div class="col-sm-4 p-0 m-2 font-weight-light bg-light" style="font-size: 15px;">
                    <h5 class="pl-4 pr-4 pt-4">Create A Project</h5>
                    <hr>
                    <p class="pl-4 pr-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                    </p>
                    <small class="bottom-footer text-center">
                        <a class="text-primary dash-text-intolink" href="">Creat a project</a>
                    </small>
                </div>
                <div class="col-sm-4 p-0 m-2 font-weight-light bg-light" style="font-size: 15px;">
                    <h5 class="pl-4 pr-4 pt-4">Manage Your Projects</h5>
                    <hr>
                    <p class="pl-4 pr-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
                    </p>
                    <small class="bottom-footer text-center">
                        <a class="text-primary dash-text-intolink" href="">Begin to manage your tasks </a>
                    </small>
                </div>
                <div class="col-sm-4 p-0 m-2 font-weight-light bg-light" style="font-size: 15px;">
                    <h5 class="pl-4 pr-4 pt-4">Get Reminder</h5>
                    <hr>
                    <p class="pl-4 pr-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laboriosam ut omnis sapiente vitae voluptates cum doloribus? Id dolorem impedit,
                        ipsam eveniet reiciendis incidunt quidem facilis sit corrupti perferendis! Illum, sequi?
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
    <br><br>
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
                        <p>
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
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('foot')

    @endsection
</body>

</html>
