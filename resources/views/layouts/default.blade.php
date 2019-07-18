<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!----------- External stylesheet  ----->
    <link rel="stylesheet" href="/css/app.css">

    <!-- font awsome ---->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
        @include('layouts.header')

       <div class="container">

        @include('inc.message')
        @yield('content')

       </div>

        @include('layouts.footer')



<script src="/js/app.js"></script>
</body>
</html>
