<header class="main-header txt-center">

    <a href="/">
        <img src=" {{ asset('img/logo/logo.png') }} " alt="">
    </a>
    <nav class="navbar">
        <ul class="navbar-list h-list center">
            <li class="navbar-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="navbar-item">
                <a href="{{ route('products') }}">Prodotti</a>
            </li>
            <li class="navbar-item">
                <a href="{{ route('news') }}">News</a>
            </li>
        </ul>
    </nav>

</header>