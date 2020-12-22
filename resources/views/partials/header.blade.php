<header class="main-header txt-center">

    <a href="/">
        <img src=" {{ asset('img/logo/logo.png') }} " alt="">
    </a>
    <nav class="navbar">
        <ul class="navbar-list h-list center">
        @if (request()->is('home'))
            <li class="navbar-item {{$isActive}}">
                <a href="/home">Home</a>
            </li>
            <li class="navbar-item">
                <a href="/">Prodotti</a>
            </li>
            <li class="navbar-item">
                <a href="/news">News</a>
            </li>
        @endif
        @if (request()->is('/'))
            <li class="navbar-item">
                <a href="/home">Home</a>
            </li>
            <li class="navbar-item {{$isActive}}">
                <a href="/">Prodotti</a>
            </li>
            <li class="navbar-item">
                <a href="/news">News</a>
            </li>
        @endif
        @if (request()->is('news'))
            <li class="navbar-item">
                <a href="/home">Home</a>
            </li>
            <li class="navbar-item">
                <a href="/">Prodotti</a>
            </li>
            <li class="navbar-item {{$isActive}}">
                <a href="/news">News</a>
            </li>
        @endif
        </ul>
    </nav>

</header>