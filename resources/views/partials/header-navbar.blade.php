@if(request()->is('/'))
    <li class="nav-item active">
        <a href="{{ route('home') }}">Home</a>
    </li>
@else 
    <li class="nav-item">
        <a href="{{ route('home') }}">Home</a>
    </li>
@endif
@if(request()->is('products'))
    <li class="nav-item active">
        <a href="{{ route('products') }}">Prodotti</a>
    </li>
@elseif(request()->is('product-detail/'))
    <li class="nav-item active">
        <a href="{{ route('products') }}">Prodotti</a>
    </li>
@else 
    <li class="nav-item">
        <a href="{{ route('products') }}">Prodotti</a>
    </li>
@endif
@if(request()->is('news'))
    <li class="nav-item active">
        <a href="{{ route('news') }}">News</a>
    </li>
@else 
    <li class="nav-item">
        <a href="{{ route('news') }}">News</a>
    </li>
@endif