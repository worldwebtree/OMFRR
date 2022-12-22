<footer>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-5">
                        <div class="footer-logo">
                            <h2 class="text-info">RateRestaurant</h2>
                            <p>Sed ut perspiciatis unde mnis iste natus error sit ptatem accus antium doloremque lauda ntium.</p>
                        </div>
                        <div><a href="{{ route('frontend.about.page') }}" class="btn btn-primary">Know More</a></div>
                    </div>

                    <div class="col-md">
                        <div class="footer-widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="list-unstyled icons-listing mb-0 widget-listing arrow">
                                <li><a href="{{ route('frontend.restaurant-listening.search.by.category', 'Dine In') }}">Dine In</a></li>
                                <li><a href="{{ route('frontend.restaurant-listening.search.by.category', 'Take Away') }}">Take Away</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mr-top-footer">
                <div class="row">
                @php($contact = App\Models\Admin\ContactUs::getContactInformation())
                @foreach ($contact as $contactData)
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
                    © WorldWebTree 2022 All rights reserved.
                </div>
                <div class="col-md-auto col-12 copyrights-link ml-md-auto">
                    <a href="javascript:">Home</a> | <a href="javascript:">About</a> | <a href="javascript:">Contact Us</a> | <a href="javascript:">Terms & Conditions</a> |   <a href="javascript:">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
