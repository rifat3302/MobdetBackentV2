<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Mobil Hotel</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- Font Awesome -->
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- NProgress -->
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet" type="text/css" >
    <!-- Animate.css -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" >

    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <audio id="audiobox" >
                <source src="{{asset('Audio/Country_Blues.mp3')}}" type="audio/mpeg"></source>
                <source src="{{asset('Audio/Country_Blues.mp3')}}" type="audio/wav"></source>
                <source src="{{asset('Audio/Country_Blues.mp3')}}" type="audio/ogg"></source>
                </audio>
                <form action="home" method="post">
                    @csrf
                    <h1>Welcome Mobil  Hotel </h1>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" style="border-radius:15px">  Log in</button>
                    </div>
                    @if ($status === 'fail')
                    <script>swal({
                            title: 'Error',
                            text: 'Username or Password is wrong',
                            icon: "error",
                            buttons: true,
                            dangerMode: true,
                        }).then(function() {
                            window.location.href = "/mobdet";
                        });</script>
                    @endif

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1>Mobil Hotel</h1>
                        </div>
                        <div>
                            <img src="{{ asset('images/logo.png')}}">
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</div>
<script src="js/app.js"></script>
</body>
</html>
