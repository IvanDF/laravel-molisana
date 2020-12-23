@extends('layouts/main')

@section('main-content') 
<div class="main-section">

    <div class="container">
        <h2>LUNGHE</h2>
        <div class="cards-list">
            @foreach( $lunghe as $card )
                <div class="card">
                    <img class="img-resp" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <div class="card-h">
                        <div class="filter"></div>
                        <h3>{{ $card['titolo'] }}</h3>
                        <a href="{{ route('product', $card['id']) }}">Clicca qui</a>
                    </div>
                </div>
            @endforeach
        </div>
        <h2>CORTE</h2>
        <div class="cards-list">
            @foreach( $corte as $card )
                <div class="card">
                    <img class="img-resp" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <div class="card-h">
                        <div class="filter"></div>
                        <h3>{{ $card['titolo'] }}</h3>
                        <a href="{{ route('product', $card['id']) }}">Clicca qui</a>
                    </div>
                </div>
            @endforeach
        </div>
        <h2>CORTISSIME</h2>
        <div class="cards-list">
            @foreach( $cortissime as $card )
                <div class="card">
                    <img class="img-resp" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <div class="card-h">
                        <div class="filter"></div>
                        <h3>{{ $card['titolo'] }}</h3>
                        <a href="{{ route('product', $card['id']) }}">Clicca qui</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
