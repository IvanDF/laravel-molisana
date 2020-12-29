<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/logo/favicon.png')}}" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Main styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>

    <div id="molisana">

        <!-- IMPORT MAIN HEADER -->
        @include('partials.main-header')
    
        <!-- MAIN SECTION -->
        @yield('content')
    
        <!-- IMPORT MAIN FOOTER -->
        @include('partials.footer')

    </div>


    <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
