<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('img/fav.jpg')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{url('img/fav.jpg')}}">
<link rel="icon" type="image/png" sizes="16x16"href="{{url('img/fav.jpg')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'IbrahimChar') }}</title> --}}
    <title>Ibrahim Char</title>

    <!-- Fonts -->
    <link rel="dns-prefetch"
        href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('components.header')

        {{-- <main> --}}
            @yield('content')
            {{-- </main> --}}
        @include ("components.footer")
    </div>
</body>

</html>