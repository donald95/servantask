<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and enjoy working</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
</head>

<body>
    <div class="align-icon">
        <a href="{{ route('welcome') }}">
            <img src="" alt="servant" style="width: 70px;">
        </a>
    </div>
    <div class="container">
        <form class="" name='login' action='' method='POST' enctype="multipart/form-data">
            <fieldset id="container-form" class="container">
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
                                <input class="form-control form-control-md" type="text" placeholder="Username or e-mail"
                                    aria-label="Recipient's username">
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
                                <input class="form-control form-control-md" type="text" placeholder="Password"
                                    aria-label="Recipient's username">
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
                        </td>
                    </tr>
                </table>
                <small>
                    <a href="">Forgot password?</a>
                </small>
            </fieldset>
        </form>
        <br>
        <div class="border rounded p-2" style="margin: auto; width: 40%; height: auto;">
            <p class="m-2 text-center">Don't you have an account? <a href="{{ route('register') }}">Create an account.</a></p>
        </div>
    </div>

    <footer>
        <div>
            <small><a href="">About us</a></small>
            <small><a href="">Docs</a></small>
            <small><a href="">Forum</a></small>
        </div>
    </footer>
    <script type="text/javascript" src="{{asset('js/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
