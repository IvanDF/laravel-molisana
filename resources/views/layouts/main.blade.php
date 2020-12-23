<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MOLISANA</title>

        <!-- FONT -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- MAIN STYLE -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>

        <!-- HEADER -->
        @include( 'partials.header', ['isActive' => 'active'] )

        <main class="main-content">
            @yield('main-content')
        </main>

          <!-- FOOTER -->
          @include( 'partials.footer' )

    </body>
</html>
