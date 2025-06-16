<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('frontend/assets/images/logo/logo.jpeg') }}" alt=""
                style="height: 100px; width: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Category</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="shop.html">Indian Food</a>
                        <a class="dropdown-item" href="product-single.html">Thai Food</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{ route('menu') }}">Single Menu</a>
                        <a class="dropdown-item" href="{{ route('set_menu') }}">Set Menu</a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{ route('service') }}" class="nav-link">Services</a></li>
                {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                {{-- <li class="nav-item cart"><a href="cart.html" class="nav-link"><span
                            class="icon icon-shopping_cart"></span><span
                            class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
