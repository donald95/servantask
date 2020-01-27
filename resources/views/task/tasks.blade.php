@extends('samples.main')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Servant Tasks</title>
    <link rel="stylesheet" href="{{ asset('css/section-task.css') }}">
</head>

<body>

    @section('head')
    <nav class="navbar navbar-expand-lg navbar-light sticky-top color-nav"
        style="box-shadow: 0px 0px 5px 0px rgba(185, 184, 184, 0.726);">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/angry-dog.svg') }}" alt="servant" style="width: 25px;">
            &nbsp;ServanTask.com
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSopportedContent"
            aria-controls="navbarSopportedContent" aria-expanded="false">
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
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Projects</a></li>
                @if (!$project->isEmpty())
                <li class="breadcrumb-item active" aria-current="page">{{ $project->first()->title }}</li>
                @else
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                @endif
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
                            &nbsp;Create new task
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

                <ul class="list-group">
                    @if (!$project->isEmpty())
                    @foreach ($project as $item)
                    <a href="" class="list-group-item list-group-item-light list-group-item-action" type="button"
                        data-toggle="collapse" data-target="{{ '#collapse' . $item->id }}" aria-expanded="true"
                        aria-controls="collapseOne">
                        <div class="d-flex align-items-center p-2">
                            <strong class="mr-4" style="font-size: 17px; width: 30%;">{{ $item->name }}</strong>
                            <span class="mr-4 paragraph-weight" style="font-size: 17px; width: 35%;">
                                {{ $item->description }}
                            </span>
                            <span class="mr-4 text-center" style="width: 20%;">
                                <small
                                    style="color: rgb(164, 164, 164);">{{ $item->created_at->format('F j, Y') }}</small>
                            </span>
                            <div class="ml-auto custom-control custom-checkbox text-right" style="width: 15%;">
                                <input type="checkbox" class="custom-control-input" id="check2">
                                <label for="check2" class="custom-control-label">Select</label>
                            </div>
                        </div>
                    </a>
                    <div id="{{ 'collapse' . $item->id }}" class="collapse border" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="container card-body">
                            <p class="w-75 p-4">
                                Anim pariatur cliche reprehenderit, enim eiusmod high
                                life accusamus terry richardson ad squid.
                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                Food truck quinoa nesciunt laborum eiusmod.
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <a class="list-group-item list-group-item-light list-group-item-action">
                        <div class="d-flex justify-content-center align-items-center">
                            <h5 class="p-4">No tasks have been added.</h5>
                        </div>
                    </a>
                    @endif

                </ul>
            </div>
        </div>
    </main>
    @endsection

    @section('foot')

    @endsection
</body>

</html>
