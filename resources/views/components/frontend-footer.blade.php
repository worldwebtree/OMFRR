<footer>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-md-7">
                        <div class="footer-logo">
                            <h2 class="text-info">{{ config('app.name') }}</h2>
                        </div>
                        <div><a href="{{ route('frontend.about.page') }}" class="btn btn-primary">Know More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-md-7">
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
                </div>
            </div>

            <div class="col-lg-5 mr-top-footer">
                <div class="row">
                @foreach (getContactInformation() as $contactData)
                    <div class="col-md-6 col-12">
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
                    </div>
                @endforeach

                    <div class="col-md-6 col-12">
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
                                <button type="submit" class="btn btn-default">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-auto col-12">
                    © <a class="text-info" href="/">{{ config('app.name') }}</a> 2022 All rights reserved.
                </div>
                <div class="col-md-auto col-12 copyrights-link ml-md-auto">
                    <a href="{{ route('frontend.index.page') }}">Home</a> | <a href="{{ route('frontend.about.page') }}">About</a> | <a href="{{ route('frontend.restaurant-listening.page') }}">Restaurants</a> | <a href="{{ route('frontend.contact.page') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
