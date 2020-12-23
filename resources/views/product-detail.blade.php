@extends('layouts/main')

@section('main-content') 
<div class="product-detail">
    <div class="container txt-center">
        @if ( $id = $length )
            <a class="next" href="{{route('product', $id = 0)}}"><i class="fas fa-angle-right"></i></a>
            @if ( $id > $length )
                <a class="next" href="{{route('product', $id + 1)}}"><i class="fas fa-angle-right"></i></a>
            @endif
        @endif
        @if ( $id <= 0 )
            <a class="prev" href="{{route('product', $id = $length)}}"><i class="fas fa-angle-left"></i></a>
            @if ( $id > 0 )
            <a class="prev" href="{{route('product', $id - 1)}}"><i class="fas fa-angle-left"></i></a>
            @endif
        @endif
        <h2> {{ $product['titolo'] }} </h2>
        <img class="img-resp" src="{{ $product['src-h'] }}" alt="">
        <img class="img-resp" src="{{ $product['src-p'] }}" alt="">
        <p> {!! $product['descrizione'] !!} </p>
</div>
</div>
@endsection
