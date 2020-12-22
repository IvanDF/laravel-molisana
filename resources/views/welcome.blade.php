<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{'css/app.css'}}">
    </head>
    <body>

        <h1>Prova</h1>

        <div class="container">
            <h2>LUNGHE</h2>
            <div class="cards-list">
                @foreach( $lunghe as $card )
                    <div class="card">
                        <img class="img-resp" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    </div>
                @endforeach
            </div>
            <h2>CORTE</h2>
            <div class="cards-list">
                @foreach( $corte as $card )
                    <div class="card">
                        <img class="img-resp" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    </div>
                @endforeach
            </div>
            <h2>CORTISSIME</h2>
            <div class="cards-list">
                @foreach( $cortissime as $card )
                    <div class="card">
                        <img class="img-resp" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    </div>
                @endforeach
            </div>
        </div>

    </body>
</html>
