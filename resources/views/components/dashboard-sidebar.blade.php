<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        @if (auth()->user()->role == "admin")
            <ul class="metismenu text-capitalize" id="menu">
                <li class="nav-label">Admin Dashboard</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="nav-text">user management</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a class="" href="{{ route('admin.users.manage') }}">authentiacted user's</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-key"></i><span class="nav-text">keyword management</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a class="" href="{{ route('admin.users.manage') }}">add keyword</a>
                        </li>
                    </ul>
                </li>
            </ul>
            @else
            <ul class="metismenu text-capitalize" id="menu">
                <li class="nav-label">Customer Dashboard</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="nav-text">user management</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a class="" href="#">authentiacted user's</a>
                        </li>
                    </ul>
                </li>
            </ul>
        @endif
    </div>
</div>
