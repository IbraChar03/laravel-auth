<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Ibrahim Char') }}</title> --}}
    <title>Ibrahim Char</title>

    <!-- Fonts -->
    <link rel="dns-prefetch"
        href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/main.css','resources/css/util.css'])
</head>

<body>
    {{-- <div id="app"> --}}
        @include('components.header')

    
            @yield('content')
            
        {{--
    </div> --}}
</body>

</html>