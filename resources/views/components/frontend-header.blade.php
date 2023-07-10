<header class="header-anim">
    <!-- Main Navigation Start -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light header-nav py-4">
            <a class="navbar-brand text-white" href="{{ route('frontend.index.page') }}">
                <span>
                    <strong>
                        {{ config('app.name') }}
                    </strong>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse header-nav-links" id="navbarNav">
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
                    @auth

                        @if (auth()->user()->role === "admin")

                            @php($link = route('admin.dashboard'))

                        @elseif (auth()->user()->role === "customer")

                            @php($link = route('customer.dashboard'))

                        @elseif (auth()->user()->role === "restaurant")

                            @php($link = route('restaurant.dashboard'))

                        @endif
                            <!-- Topbar Request Quote Start -->
                            <li class="nav-item text-uppercase">
                                <button class="btn btn-sm btn-default login-btn rounded-pill">
                                    <a class="text-white" href="{{ $link }}">dashboard</a>
                                </button>
                            </li>
                            <!-- Toggle Button Start -->
                    @endauth

                    @guest
                        <!-- Topbar Request Quote Start -->
                        <li class="nav-item">
                            <button class="btn btn-sm login-btn rounded-pill">
                                <a class="text-white" href="{{ route('login') }}">login</a>
                            </button>
                        </li>
                        <!-- Toggle Button Start -->
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
    <!-- Main Navigation End -->
</header>
