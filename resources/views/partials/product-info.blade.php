@section('title')
    <title>{{$product['titolo']}} | La Molisana</title>
@endsection

<div class="container p-y50">
    @if ( $id > 1 ) 
        <a href=" {{ $id - 1 }} ">
            <i class="prev fas fa-angle-left"></i>
        </a>
        @else 
            <a href=" {{ $id = ( $length - 1) }} ">
                <i class="prev fas fa-angle-left"></i>
            </a>
    @endif
    @if ( $id < ($length - 1) )
        <a href="{{ $id + 1 }}">
            <i class="next fas fa-angle-right"></i>
        </a>
        @else 
            <a href="{{ $id = 0 }}">
                <i class="next fas fa-angle-right"></i>
            </a>
    @endif
    <h2 class="txt-center mb-50">{{$product['titolo']}}</h2>
    <img class="img-resp" src="{{$product['src-h']}}" alt="">
    <img class="img-resp" src="{{$product['src-p']}}" alt="">
    <p>{!! $product['descrizione'] !!}</p>
</div>