<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        @if (auth()->user()->role == "admin")
                {{-- Sidebar links for admin dashbaord --}}

                <ul class="metismenu text-capitalize" id="menu">
                    <li class="nav-label">
                        <a class="bg-white" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('admin.users.manage') }}" aria-expanded="false">
                            <i class="fa fa-users" aria-hidden="true"></i><span class="nav-text px-2">manage user</span>
                        </a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('admin.restaurants.manage') }}" aria-expanded="false">
                            <i class="fas fa-utensils" aria-hidden="true"></i><span class="nav-text px-2">manage restaurant</span>
                        </a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('admin.keyword.management') }}" aria-expanded="false">
                            <i class="fa fa-key" aria-hidden="true"></i><span class="nav-text px-2">Add keyword</span>
                        </a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('admin.users.feedback') }}" aria-expanded="false">
                            <i class="fa fa-comment" aria-hidden="true"></i><span class="nav-text px-2">manage user Feedback</span>
                        </a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('admin.about') }}" aria-expanded="false">
                            <i class="fa fa-newspaper" aria-hidden="true"></i><span class="nav-text px-2">about us</span>
                        </a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('admin.contact') }}" aria-expanded="false">
                            <i class="fa fa-phone" aria-hidden="true"></i><span class="nav-text px-2">contact us</span>
                        </a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('admin.users.query') }}" aria-expanded="false">
                            <i class="fa fa-question" aria-hidden="true"></i><span class="nav-text px-2">user queries</span>
                        </a>
                    </li>

                    {{-- <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('admin.subscribed.users') }}" aria-expanded="false">
                            <i class="fa fa-users" aria-hidden="true"></i><span class="nav-text px-2">subscribed user's</span>
                        </a>
                    </li> --}}
                </ul>

            @elseif (auth()->user()->role == 'restaurant')
                {{-- Sidebar links for restaurant dashbaord --}}
                <ul class="metismenu text-capitalize" id="menu">
                    <li class="nav-label">
                        <a class="bg-white" href="{{ route('restaurant.dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('restaurant.management') }}" aria-expanded="false">
                            <i class="fa fa-home" aria-hidden="true"></i><span class="nav-text px-2">post restaurant</span>
                        </a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('restaurant.users.feedback') }}" aria-expanded="false">
                            <i class="fa fa-comments" aria-hidden="true"></i><span class="nav-text px-2">user feedbacks</span>
                        </a>
                    </li>
                </ul>

            @elseif (auth()->user()->role == 'customer')
                {{-- Sidebar links for customer dashbaord --}}

                <ul class="metismenu text-capitalize" id="menu">
                    <li class="nav-label">
                        <a class="bg-white" href="{{ route('customer.dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-list-item">
                        <a class="nav-anchor-item" href="{{ route('customer.restaurant.management.feedback') }}" aria-expanded="false">
                            <i class="fa fa-comments"></i><span class="nav-text px-2">Your Feedback's</span>
                        </a>
                    </li>

                </ul>
        @endif
    </div>
</div>
