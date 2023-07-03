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
                    <h3 class="widget-title">News Letter</h3>
                    <p>Subscribe to our news letter  to receive every new restaurant entry information.</p>
                    <form action="{{ route('frontend.restaurant.news.letter.subscribe') }}" method="POST">
                        @csrf

                        <x-error/>
                        <x-alert/>

                        <div class="mb-3">
                            <input type="email" required name="email" class="form-control form-light" id="exampleFormControlInput1" placeholder="Enter Email Address">
                        </div>
                        <button type="submit" class="btn btn-default w-100">Subscribe</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    © <a class="text-info" href="{{ route('frontend.index.page') }}">{{ config('app.name') }}</a> 2022 All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
