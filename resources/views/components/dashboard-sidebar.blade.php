<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        @if (auth()->user()->role == "admin")
            {{-- Sidebar links for customer dashbaord --}}
            <ul class="metismenu text-capitalize" id="menu">
                <li class="nav-label">
                   <a class="bg-white" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.users.manage') }}" aria-expanded="false">
                        <i class="fa fa-users" aria-hidden="true"></i><span class="nav-text">manage user</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.keyword.management') }}" aria-expanded="false">
                        <i class="fa fa-key" aria-hidden="true"></i><span class="nav-text">Add keyword</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.restaurant.management') }}" aria-expanded="false">
                        <i class="fa fa-home" aria-hidden="true"></i><span class="nav-text">post restaurant</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.users.feedback') }}" aria-expanded="false">
                        <i class="fa fa-comment" aria-hidden="true"></i><span class="nav-text">manage user Feedback</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.about') }}" aria-expanded="false">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i><span class="nav-text">about us</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.contact') }}" aria-expanded="false">
                        <i class="fa fa-phone" aria-hidden="true"></i><span class="nav-text">contact us</span>
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('admin.users.query') }}" aria-expanded="false">
                        <i class="fa fa-question" aria-hidden="true"></i><span class="nav-text">user queries</span>
                    </a>
                </li>
            </ul>
            @else
            {{-- Sidebar links for customer dashbaord --}}
            <ul class="metismenu text-capitalize" id="menu">
                <li class="nav-label">
                    <a class="bg-white" href="{{ route('customer.dashboard') }}">
                        Customer Dashboard
                    </a>
                </li>

                <li class="nav-list-item">
                    <a class="nav-anchor-item" href="{{ route('customer.restaurant.management.feedback') }}" aria-expanded="false">
                        <i class="fa fa-comments"></i><span class="nav-text">Your Feedback's</span>
                    </a>
                </li>

            </ul>
        @endif
    </div>
</div>
