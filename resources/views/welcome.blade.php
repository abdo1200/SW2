<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/all.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/" class="navbar-brand ml-2">Check-In</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto mr-3">
                @if (Route::has('login'))
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endif
                @endif
            </ul>
        </div>
    </nav>

    <div class="container-fluid header">
        <div class="row justify-content-center">
            <div class="col-5 head-col text-center">
                <h2 style="color:white">InterContinental Cairo Semiramis</h2>
                <p>Corniche El Nil Street, Cairo, 11511, Egypt</p>
            </div>
        </div>
    </div>

        @include('layouts.footer')
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
