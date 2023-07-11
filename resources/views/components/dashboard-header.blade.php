<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons">
                    <a href="{{ route('frontend.index.page') }}" class="home-icon"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="Home">
                        <i class="fa fa-home text-primary" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="icons dropdown">
                    @php
                        if (auth()->user()->role === "admin") {
                            $link = route('admin.notifications');

                            $notifications = auth()->user()->unreadNotifications->count();

                            }elseif (auth()->user()->role === "customer") {

                            $link = route('customer.notifications');

                            $notifications = auth()->user()->unreadNotifications->count();

                        }elseif (auth()->user()->role === "restaurant") {

                            $link = route('restaurant.notifications');

                            $notifications = auth()->user()->unreadNotifications->count();
                        }
                    @endphp

                    <a href="{{ $link }}"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="Notifications">

                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-pill bg-primary">
                            {{ $notifications }}
                        </span>
                    </a>
                </li>

                <li class="icons dropdown">
                    <div class="c-pointer" data-toggle="dropdown">
                        <i class="fa fa-user-circle fa-2x"></i>
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            @php
                                if (auth()->user()->role === "admin") {
                                    $link = route('admin.profile');

                                    }elseif (auth()->user()->role === "customer") {
                                    $link = route('customer.profile');

                                    }elseif (auth()->user()->role === "restaurant") {
                                    $link = route('restaurant.profile');
                                }
                            @endphp
                            <ul>
                                <li>
                                    <a href="{{ $link }}"><i class="icon-user"></i> <span>Profile</span></a>
                                </li>
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            <i class="icon-key"></i>
                                            <span>Logout</span>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
