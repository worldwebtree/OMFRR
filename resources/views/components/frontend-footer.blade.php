<footer>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-3">
                <div class="footer-logo">
                    <h2 class="text-info">{{ config('app.name') }}</h2>
                </div>
                <div><a href="{{ route('frontend.about.page') }}" class="btn btn-primary">Know More</a></div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="footer-logo">
                    <h3 class="widget-title">Categories</h3>
                </div>
                <div class="restaurant-category">
                    <ul class="list-unstyled">
                        <li><a style="color: #b2b2b2" href="{{ route('frontend.restaurant-listening.search.by.category', 'Dine In') }}">Dine In</a></li>
                        <li><a style="color: #b2b2b2" href="{{ route('frontend.restaurant-listening.search.by.category', 'Take Away') }}">Take Away</a></li>
                        <li><a style="color: #b2b2b2" href="{{ route('frontend.restaurant-listening.search.by.category', 'Dine In & Take Away') }}">Dine In & Take Away</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                @foreach (getContactInformation() as $contactData)
                    <div class="footer-widget">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="widget-contact">
                            <p>{{ $contactData->address }}</p>
                            <p>Call : {{ $contactData->phone }}</p>
                            <p>Mail : {{ $contactData->customer_support_email }}</p>
                        </div>
                        <div class="social-icons-footers">
                            <ul class="list-unstyled">
                                @foreach (json_decode($contactData->social_links) as $name => $link)
                                    <li><a href="{{ $link }}"><i class=" fa fa-{{ $name }}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="footer-widget">
                    <h3 class="widget-title">Pages</h3>
                    <ul class="footer-nav p-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.index.page') }}">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.about.page') }}">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.restaurant-listening.page') }}">restaurant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.contact.page') }}">contact</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <hr class="bg-white">
            <div class="row">
                <div class="col-12 text-center">
                    © <a class="text-info" href="{{ route('frontend.index.page') }}">{{ config('app.name') }}</a> 2022 All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
