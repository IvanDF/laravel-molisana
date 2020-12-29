<!-- MAIN HEADER -->
<header class="main-header">
    <div class="container">
        <div class="nav-logo txt-center p-y50">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/logo/logo.png') }}" alt="La Molisana">
        </a>
        </div>
        <nav class="main-nav">
            <ul class="nav-list h-list desktop-only center">
              @include ('partials.header-navbar')
            </ul>
            <div @click="isVisible = !isVisible" :class="['hamburger-menu mobile-only dropdown mb-25' , isVisible ? 'active' : '']">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul v-if="isVisible" class="nav-list v-list txt-center mobile-only dropdown-menu">
                @include ('partials.header-navbar')
            </ul>
        </nav>
    </div>
</header>