<div class="nav-header">
    <div class="brand-logo">
        <strong class="text-white">{{ auth()->user()->role }}</strong>
        <a href="{{ route('dashboard') }}">
            <b class="logo-abbr"><img src="{{ asset('frontend/images/logo.png') }}" alt=""> </b>
            <span class="logo-compact"><img src="{{ asset('frontend/images/logo-compact.png') }}" alt=""></span>
            <span class="brand-title">
                <img src="{{ asset('frontend/images/logo-text.png') }}" alt="">
            </span>
        </a>
    </div>
</div>
