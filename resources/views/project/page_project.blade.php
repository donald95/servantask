@extends('samples.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Servant Projects</title>
    <link rel="stylesheet" href="{{ asset('css/section-project.css') }}">
</head>

<body>
    @section('head')
    <nav class="navbar navbar-expand-lg navbar-light sticky-top color-nav"
        style="box-shadow: 0px 0px 5px 0px rgba(185, 184, 184, 0.726);">
        <a class="navbar-brand" href="">ServanTask.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSopportedContent"
            aria-controls="navbarSopportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSopportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown">My Profile</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">Settings</a>
                        <a class="dropdown-item" href="">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    @endsection

    @section('body')
    <nav class="container pt-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Projects</li>
        </ol>
    </nav>
    <div>
        <div class="row">
            <div class="col-md-12 text-center ">
                <div class="btn-group m-2">
                    <button type="button" class="btn btn-sm" id="button-create" data-toggle="modal" data-target="#"">
                        <span title=" Documentation" class="">
                        <i class="icon" style="opacity: 1;">&#xe807;</i>
                        </span>
                        &nbsp;Create new project
                    </button>
                    <button type="button" class="btn btn-sm" id="button-setting">
                        <span title=" Documentation" class="">
                            <i class="icon" style="opacity: 1; ">&#xe808;</i>
                        </span>
                        &nbsp;Settings
                    </button>
                </div>
            </div>
        </div>
        <div class="container w-75">
            <div class="p-2 w-100 text-center">
                <span class="badge bg-secondary badge-pill text-white"
                    style="font-size: 13px; font-weight: 400; padding: 6px;">
                    14th, November 2019
                </span>
            </div>
            <ul class="list-group mb-4">
                <a href="tasks-page.html"
                    class="list-group-item list-group-item-light list-group-item-action pad-item-project">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Project #01</h5>
                        <span class="badge bg-primary badge-pill text-white"><span>3</span> tasks</span>
                    </div>
                    <hr>
                    <div>
                        <p class="paragraph-weight" style="font-size: 17px;">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small style="color: rgb(164, 164, 164);">3 minutes ago</small>
                            <small class="text-right" style="width: 60%; color: rgb(164, 164, 164);">State:</small>
                            <div class="progress w-25">
                                <div class="progress-bar" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="tasks-page.html"
                    class="list-group-item list-group-item-light list-group-item-action pad-item-project">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Project #01</h5>
                        <span class="badge bg-primary badge-pill text-white"><span>3</span> tasks</span>
                    </div>
                    <hr>
                    <div>
                        <p class="paragraph-weight" style="font-size: 17px;">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small style="color: rgb(164, 164, 164);">3 minutes ago</small>
                            <small class="text-right" style="width: 60%; color: rgb(164, 164, 164);">State:</small>
                            <div class="progress w-25">
                                <div class="progress-bar" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </ul>
        </div>
    </div>
    @endsection

    @section('foot')

    @endsection

</body>

</html>
