<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        @if (auth()->user()->role == "admin")
            <ul class="metismenu text-capitalize" id="menu">
                <li class="nav-label">Admin Dashboard</li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.users.manage') }}" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="nav-text">user's management</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.keyword.management') }}" aria-expanded="false">
                        <i class="fa fa-key"></i><span class="nav-text">keyword's management</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.restaurant.management') }}" aria-expanded="false">
                        <i class="fa fa-home"></i><span class="nav-text">Restaurant Management</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.users.feedback') }}" aria-expanded="false">
                        <i class="fa fa-list"></i><span class="nav-text">User's Feedback</span>
                    </a>
                </li>
            </ul>
            @else
            <ul class="metismenu text-capitalize" id="menu">
                <li class="nav-label">Customer Dashboard</li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('customer.restaurant.management') }}" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="nav-text">Restaurant Post's</span>
                    </a>
                </li>

            </ul>
        @endif
    </div>
</div>
