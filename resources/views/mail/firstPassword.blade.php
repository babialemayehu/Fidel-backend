<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie" /> 
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fidel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css')}}" />
    <link rel="stylesheet" href="{{ asset('/css/custom.bootstrap.css') }}" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color:rgba(27, 157, 116, 1);">
            <div class="container">
                <div class="navbar-header">
                    <a href="URL::to('/#/')" class="navbar-brand" style="color:white;font-size:1.6em;padding:6px" >
                        <img src="{{ asset('/img/logo-inverse.png') }}" style="width:25px;display:inline"> 
                        <span>{{str_replace('S','',$websiteTitle)}}</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <h3>Welcome to fidel</h3>
                <p>Fidel is a learning managment tool which is developed to facilitate the communication 
                    between teacher and students. </p>
                <p>
                    With fidel you can
                </p>
                <ul>
                    <li>Share files</li>
                    <li>Check every events</li>
                    <li>Submit assignments</li>
                    <li>View results</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h5>This is your temporary password. Use your registral id as username; 
                <h6 style="text-align: center;">{{$password}}</h6>
                <div style="text-align: center;" class="container">
                    <a href="{{ URL::to('/login#login') }}">
                        <button class="btn btn-success">LOGIN</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
