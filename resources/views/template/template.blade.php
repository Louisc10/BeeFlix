<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    @yield('nav')
    @yield('content')
</body>
</html>