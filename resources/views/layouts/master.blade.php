<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my application</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/all.js"></script>
</head>
<body>

    @include('layouts.nav')
    
   <div class="row justify-content-center">
        <div class="col-8 mt-5 mb-5">
            @include('layouts.message')
        </div>
    </div>

        @yield('content')


    @include('layouts.footer')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>