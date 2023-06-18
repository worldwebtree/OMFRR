<header class="header-anim">
    <div class="top-bar-stripe">
        <div class="container px-md-0">
            @php($contact = App\Models\Admin\ContactUs::getContactInformation())
            @foreach ($contact as $data)
                <div class="row align-items-center">
                    <div class="col-lg-auto col-sm-12">
                        <div class="top-icons">
                            <span><i class="fa fa-map-marker"></i> {{ $data->address }}</span>
                            <span><i class="fa fa-envelope"></i> {{ $data->customer_support_email }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg">
                        <div class="social-icons">
                            <ul class="list-unstyled">
                                @foreach (json_decode($data->social_links) as $name => $link)
                                    <li><a href="{{ $link }}"><i class=" fa fa-{{ $name }}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Main Navigation Start -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container text-nowrap bdr-nav px-0">
            <div class="d-flex mr-auto">
                <a class="navbar-brand" href="{{ route('frontend.index.page') }}">
                    <span>
                        <strong>
                            {{ config('app.name') }}
                        </strong>
                    </span>
                </a>
            </div>
        </div>

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
                            <a class="nav-link text-warning" href="{{ $link }}">dashboard</a>
                        </li>
                        <!-- Toggle Button Start -->
                @endauth

                @guest
                    <!-- Topbar Request Quote Start -->
                    <li class="nav-item text-uppercase">
                        <a class="nav-link text-warning" href="{{ route('login') }}">login</a>
                    </li>
                    <!-- Toggle Button Start -->
                @endguest
            </ul>
            <!-- Main Navigation End -->
        </div>
        </div>
    </nav>
    <!-- Main Navigation End -->
</header>
