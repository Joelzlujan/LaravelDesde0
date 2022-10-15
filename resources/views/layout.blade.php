<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Aprendible')</title>
    <style>
        .active a{
            color:red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials/nav')
    @yield('content')
</body>
</html>
