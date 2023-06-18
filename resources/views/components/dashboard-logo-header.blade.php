<div class="nav-header">
    <div class="brand-logo">
        @php
            if (auth()->user()->role === "admin"){
                    $link = route('admin.dashboard');

            }elseif (auth()->user()->role === "customer") {
                    $link = route('customer.dashboard');

            }elseif (auth()->user()->role === "restaurant") {
                    $link = route('restaurant.dashboard');
            }
        @endphp

        <a href="{{ $link }}" class="text-white">
            @php
                $name = auth()->user()->name;
                $getChar = explode(" ", $name);
            @endphp

            <b class="logo-abbr">
                {{ strtoupper($getChar[0][0]) }}
                {{ isset($getChar[1]) ? strtoupper($getChar[1][0]) : " " }}
            </b>
            <span class="brand-title">
                {{ auth()->user()->name }}
            </span>
        </a>
    </div>
</div>
