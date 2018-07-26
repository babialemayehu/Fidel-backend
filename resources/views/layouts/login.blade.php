<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> @yield("pageTitle") </title>
        <!-- DEV ENVIROMENT LINK -->
        <link rel="stylesheet" href="/css/remodal.css">
        <link rel="stylesheet" href="/css/remodal-default-theme.css">
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/css/layout.css" />
        <link href='/css/Pacifico.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie" />
        <!-- END DEV ENVIROMENT LINK -->

        <!-- ON DEPLOYMENT LINK-->
        <script src="js/app.js"></script>
        <script src="js/remodal.min.js"></script>
        {{-- <script src="js/nprogress.min.js"></script> --}}
        {{-- <link rel="stylesheet" href="%bootstrap.css%" />
        <script src='#angular'></script>
        <script src='#angular-route'></script> --}}
        <!-- END ON DEPLOYMENT LINK -->
       
    </head>
     <body ng-app="skuler">
        @yield('content')
        <!-- JS DEV -->
        {{-- <script src="js/app.js"></script> --}}
         {{-- <script src="js/custom.angular.js"></script> --}}
        <!-- END JS -->

        <!-- JS DEPLOYMENT -->
        {{-- <script src="#jquery"></script>
        <script src="#bootstrap"></script> --}}
        <!-- END JS DEPLOYMENT -->
    </body>
</html>