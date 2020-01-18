<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-icons-two.css') }}">
</head>

<body>
    @yield('head')
    @yield('body')
    @include('components.footer')
    @yield('foot')
    <script type="text/javascript" src="{{asset('js/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
