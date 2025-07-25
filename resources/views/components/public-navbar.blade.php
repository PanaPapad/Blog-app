<!-- Public site header/navigation -->
<header class="navbar">
    <div class="navbar__container">
        <nav class="navbar__nav">
            <a href="/" class="navbar__title">My Blog</a>
            <div class="navbar__links">
                <a href="/" class="navbar__link {{ request()->is('/') ? 'navbar__link--active' : '' }}">Home</a>
                <a href="/about" class="navbar__link {{ request()->is('about') ? 'navbar__link--active' : '' }}">About</a>
            </div>
        </nav>
    </div>
</header>