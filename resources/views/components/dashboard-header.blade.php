<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-pill bg-primary">3</span>
                    </a>
                    <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                        <div class="dropdown-content-body">
                            <ul>
                                @php
                                    if (auth()->user()->role == "admin") {
                                        $link = route('admin.notifications');

                                        }elseif (auth()->user()->role == "user"){

                                        $link = route('customer.notifications');
                                    }
                                @endphp
                                <li>
                                    <a href="{{ $link }}">
                                        <span class="mr-3 avatar-icon bg-primary">
                                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                                        </span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Events to Join</h6>
                                            <span class="notification-text">After two days</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
