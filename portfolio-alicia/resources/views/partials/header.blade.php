<header class="s-header">
    <div class="row s-header__inner width-sixteen-col">
        <div class="s-header__block">
            <div class="s-header__logo">
                <a class="logo" href="{{ url('/') }}">
                    <img src="{{ asset('images/Alicia..png') }}" alt="Homepage">
                </a>
            </div>

            <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
        </div>

        <nav class="s-header__nav">
            <ul class="s-header__menu-links">
                <li class="current"><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('blog') }}">Projects</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>

            <div class="s-header__contact">
                <a href="https://www.linkedin.com/in/alicia-lisal-1129ba323/" class="btn btn--primary s-header__contact-btn">Let's Work Together</a>
            </div>
        </nav>
    </div>
</header>
