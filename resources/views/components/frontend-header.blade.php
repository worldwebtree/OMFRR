<header class="fixed-top header-anim">
    <div class="top-bar-stripe">
        <div class="container px-md-0">
            <div class="row align-items-center">
                <div class="col-lg-auto col-sm-12">
                    <div class="top-icons">
                        <span><i class="fa fa-map-marker"></i> 4998 Elk Creek Road Canton GA 30114</span>
                        <span><a href="mailto:info@weddingdir.com"><i class="fa fa-envelope"></i> info@weddingdir.com</a></span>
                    </div>
                </div>
                <div class="col-sm-12 col-lg">
                    <div class="social-icons">
                        <ul class="list-unstyled">
                            <li><a href="javascript:"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-instagram"></i></a>
                            <li><a href="javascript:"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container text-nowrap bdr-nav px-0">
            <div class="d-flex mr-auto">
                <a class="navbar-brand" href="#">
                    <span>
                        <strong>
                            {{ config('app.name') }}
                        </strong>
                    </span>
                </a>
            </div>
        </div>
        @auth

            @if (auth()->user()->role == "admin")

                @php($link = route('admin.dashboard'))

            @elseif (auth()->user()->role == "user")

                @php($link = route('customer.dashboard'))

            @endif
                <!-- Topbar Request Quote Start -->
                <span class="order-lg-last d-inline-flex ml-3">
                    <a class="btn btn-primary" href="{{ $link }}">dashboard</a>
                </span>
                <!-- Toggle Button Start -->
        @endauth

        @guest
            <!-- Topbar Request Quote Start -->
            <span class="order-lg-last d-inline-flex ml-3">
                <a class="btn btn-primary" href="{{ route('login') }}">login</a>
            </span>
            <!-- Toggle Button Start -->
        @endguest

        <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Toggle Button End -->

        <!-- Topbar Request Quote End -->

        <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown"
            data-animations="slideInUp slideInUp slideInUp slideInUp">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.index.page') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.about.page') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.restaurant-listening.page') }}">Restaurants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.contact.page') }}">Contact</a>
                </li>
            </ul>
            <!-- Main Navigation End -->
        </div>
        </div>
    </nav>
    <!-- Main Navigation End -->
</header>
