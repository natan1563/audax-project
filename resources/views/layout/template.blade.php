<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Audax</title>

    <!-- Fonts -->
    <link href="https://fonts.google.com/specimen/Open+Sans?query=open+sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/base.css')}}">
    @yield('css')
</head>
<body class="antialiased">
    @yield('conteudo')
</body>
</html>
