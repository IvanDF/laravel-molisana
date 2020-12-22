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
            <div class="cards-list">
                @foreach( $cards as $card )
                <div class="card">
                    <img class="img-resp" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                </div>
                @endforeach
            </div>
        </div>

    </body>
</html>
