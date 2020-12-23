@if(! empty($cards))
    <h2>{{ $title }}</h2>
    <div class="cards-list">
        @foreach( $cards as $card )
            <div class="card">
                <img class="img-resp" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <div class="card-h">
                    <div class="filter"></div>
                    <div class="card-txt txt-center">
                        <h3>{{ $card['titolo'] }}</h3>
                        <a href="{{ route('product', $card['id']) }}">Clicca qui</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif