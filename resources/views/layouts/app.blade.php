@extends('samples.main')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ServanTask.com</title>
    <link rel="stylesheet" href="{{ asset('css/section-project.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ripple-effect.css') }}">
    <script type="text/javascript" src="{{asset('js/jquery/jquery-3.4.1.js')}}"></script>
</head>

<body>

    @section('head')
    <nav class="navbar navbar-expand-lg navbar-light sticky-top color-nav" style="box-shadow: 0px 0px 5px 0px rgba(185, 184, 184, 0.726);">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/angry-dog.svg') }}" alt="servant" style="width: 25px;">
            &nbsp;ServanTask.com
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSopportedContent" aria-controls="navbarSopportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSopportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    @endsection

    @section('body')
    <main class="py-4">
        <nav class="container pt-2" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
        <div>
            <div class="row">
                <div class="col-md-12 text-center ">
                    <div class="btn-group m-2">
                        <button type="button" class="btn btn-sm" id="button-create" data-toggle="modal" data-target="#" onclick="createProjectForm();">
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
                    <span class="badge bg-secondary badge-pill text-white" style="font-size: 13px; font-weight: 400; padding: 6px;">
                        14th, November 2019
                    </span>
                </div>
                <ul class="list-group mb-4">
                    @if (!$projects->isEmpty())
                    @foreach ($projects as $item)
                    {{-- <div class="container">
                        <button class="btn btn-light rounded-circle btn-ripple" type="button">
                            <img src="{{ asset('img/edit.svg') }}" alt="" width="29px">
                    </button>
                    <button class="btn btn-light rounded-circle btn-ripple" type="button">
                        <img src="{{ asset('img/trash.svg') }}" alt="" width="29px">
                    </button>
                    <button class="btn btn-light rounded-circle btn-ripple" type="button">
                        <img src="{{ asset('img/info.svg') }}" alt="" width="29px">
                    </button>
            </div> --}}
            <div class="list-group-item list-group-item-light list-group-item-action rounded-sm mb-1 pad-item-project p-4">
                <a href="{{ route('project.show', ['id'=>$item->id]) }}" class="d-flex justify-content-between align-items-center">
                    <h5>{{ $item->title }}</h5>
                    <span class="badge bg-primary badge-pill text-white"><span>{{ $item->tasks()->count() }}</span>&nbsp;tasks</span>
                </a>
                <hr>
                <div>
                    <p class="paragraph-weight d-inline" style="font-size: 17px;">
                        {{ $item->description }}
                    </p>
                    <div class="d-flex m-2">
                        <button class="btn btn-light rounded-circle btn-ripple m-1" type="button" onclick="editProjectForm({{ $item->id }});">
                            <img src="{{ asset('img/edit.svg') }}" alt="" width="25px">
                        </button>
                        <button class="btn btn-light rounded-circle btn-ripple m-1" type="button" onclick="deleteProjectForm({{ $item->id }});">
                            <img src="{{ asset('img/trash.svg') }}" alt="" width="25px">
                        </button>
                        <button class="btn btn-light rounded-circle btn-ripple m-1" type="button" onclick="viewProjectForm({{ $item->id }});">
                            <img src="{{ asset('img/info.svg') }}" alt="" width="25px">
                        </button>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <small style="color: rgb(164, 164, 164);">{{ $item->created_at->format('F j, Y, g:i a') }}</small>
                        <small class="text-right" style="width: 50%; color: rgb(164, 164, 164);">State:</small>
                        <div class="progress w-25">
                            <div class="progress-bar" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <a class="list-group-item list-group-item-light list-group-item-action">
                <div class="d-flex justify-content-center align-items-center">
                    <h5 class="p-4">No projects have been added.</h5>
                </div>
            </a>
            @endif
            </ul>
        </div>
        </div>
    </main>

    @include('project.project_add')
    @include('project.project_edit')
    @include('project.project_delete')
    @include('project.project_view')

    @endsection

    @section('foot')
    @endsection

    <script src="{{ asset('js/myasset/project.js') }}"></script>
    {{-- <script src="{{ asset('js/myasset/validator.js') }}"></script> --}}
</body>

</html>
