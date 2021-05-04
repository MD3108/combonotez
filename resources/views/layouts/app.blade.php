<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- Favicon 
    TODO fix path -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL('/storage/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL('/storage/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL('/storage/images/favicon/favicon-16x16.png') }}">
    <!--<link rel="manifest" href="{{ URL('/storage/images/favicon/site.webmanifest') }}"> -->
    <link rel="mask-icon" href="{{ URL('/storage/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ URL('/storage/images/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#ebf6ff">
    <meta name="msapplication-config" content="{{ URL('/storage/images/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ebf6ff">
    
    <!-- Google meta  https://anthonypauwels.be/quarantedeux/metadatas/?fbclid=IwAR18PR20_19YlCS2LlEVodSXnXkVtamNtd_M_be1wHOCaw3Q4bUMxauMPuU
    TODO add them-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed&family=Saira:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body">
    @include('layouts.sprite')
    <div id="app">
        
        <header>
            @include('layouts.header')
        </header>

        <main class="py-3">
            @yield('content')
        </main>

        <footer>
            @include('layouts.footer')
        </footer>
        
    </div>
    @yield('cdn')
</body>
</html>
<!-- Code to go Super Saiyan ! -->
