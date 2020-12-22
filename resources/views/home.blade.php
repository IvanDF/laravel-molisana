@extends('layouts/main')

@section('main-content') 
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
@endsection
