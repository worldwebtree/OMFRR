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
                        <i class="fa fa-home text-light" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="icons dropdown">
                    @php
                        if (auth()->user()->role == "admin") {
                            $link = route('admin.notifications');

                            $notifications = auth()->user()->unreadNotifications->count();

                            }elseif (auth()->user()->role == "user") {

                            $link = route('customer.notifications');

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
                @php
                    if (empty(auth()->user()->avatar) || auth()->user()->avatar == null) {
                        $src = asset('frontend/images/avatar/user_icon-removebg-preview.png');

                        }elseif (!empty(auth()->user()->avatar) || auth()->user()->avatar !== null) {
                        $src = asset('storage/profile_img/'.auth()->user()->avatar);
                    }
                @endphp
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{ $src }}" height="40" width="40" alt="default_user_icon">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            @php
                                if (auth()->user()->role == "admin") {
                                    $link = route('admin.profile');

                                    }elseif (auth()->user()->role == "user") {
                                    $link = route('customer.profile');
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
