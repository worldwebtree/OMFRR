@extends('frontEnd.master')

@push('css')

@endpush

@section('content')
<!-- slider wrap -->
<x-frontend-slider-wrap/>

<main id="body-content">

    <!-- Top Wedding Listings Start -->
    <section class="wide-tb-120 floral-bg">
        <div class="container">
            <div class="section-title text-center">
                <h1>Top Restaurants Listings</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="listing-singular.html">
                                <img src="{{ asset('frontend/Styles/assets/images/weddings/wedding_listing_1.jpg') }}" alt="">
                            </a>
                            <div class="img-content">
                                <div class="bottom">
                                    <a class="tags" href="javascript:">
                                        Fashion
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="listing-singular.html">Happy Wedding Fashions <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                <div><i class="fa fa-map-marker"></i> Surat, Gujrat, India</div>
                            </div>
                            <div class="reviews">
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                (6 review)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="listing-singular.html">
                                <img src="{{ asset('frontend/Styles/assets/images/weddings/wedding_listing_2.jpg') }}" alt="">
                            </a>
                            <div class="img-content">
                                <div class="bottom">
                                    <a class="tags" href="javascript:">
                                        Photography
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="listing-singular.html">Cool Wed Photography <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                <div><i class="fa fa-map-marker"></i> Surat, Gujrat, India</div>
                            </div>
                            <div class="reviews">
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                (6 review)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="listing-singular.html">
                                <img src="{{ asset('frontend/Styles/assets/images/weddings/wedding_listing_3.jpg') }}" alt="">
                            </a>
                            <div class="img-content">
                                <div class="bottom">
                                    <a class="tags" href="javascript:">
                                        Flora
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="listing-singular.html">Lotus Wedding Florist <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
                                <div><i class="fa fa-map-marker"></i> Surat, Gujrat, India</div>
                            </div>
                            <div class="reviews">
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                (6 review)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-center mt-lg-5">
                        <a href="{{ route('frontend.restaurant-listening.page') }}" class="btn btn-default btn-rounded text-uppercase btn-lg">View More Listings</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Wedding Dir Features End -->

    <!-- Callout Style Main Start -->
    <section class="callout-main">
        <div class="container-fluid pl-0">
            <div class="row">
                <div class="col-lg-6" style="background: url({{ asset('frontend/Styles/assets/images/restaurants/d5ec9c42cade6c696ef244cc33efedd3.gif') }}) center center no-repeat; background-size: cover;">
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="callout-text">
                        <div class="section-title">
                            <h1>The Best Restaurants Review System</h1>
                        </div>
                        <p class="lead">Have any queries!</p>
                        <a href="{{ route('frontend.contact.page') }}" class="btn btn-default btn-rounded btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout Style Main End -->

    <!-- Customer Feedback Start -->
    <section class="wide-tb-90">
        <div class="container">
            <div class="section-title text-center">
                <h1>feedback from our customers</h1>
                <p>Excepteur sint occaecat cupidatat non proident sunt</p>
            </div>
            <div class="owl-carousel owl-theme dots-black" id="slider-feedback">
                <!-- Customer Testimonials -->
                <div class="item">
                    <div class="customer-feedback-wrap">
                        <div class="content">
                            <div class="icon"><i class="weddingdir_chat"></i></div>
                            Sed ut perspiciatis unde omnis iste nat error sit voluptatem accusantium doau dantium totam rem aperiam eaque.
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                        <div class="name-wrap">
                            <img src="{{ asset('frontend/Styles/assets/images/feedback_1.jpg') }}" alt="">
                            <div class="text">
                                <h3>Mark Hunter</h3>
                                <div>New York, USA</div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Customer Testimonials -->

                <!-- Customer Testimonials -->
                <div class="item">
                    <div class="customer-feedback-wrap">
                        <div class="content">
                            <div class="icon"><i class="weddingdir_chat"></i></div>
                            Sed ut perspiciatis unde omnis iste nat error sit voluptatem accusantium doau dantium totam rem aperiam eaque.
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                        <div class="name-wrap">
                            <img src="{{ asset('frontend/Styles/assets/images/feedback_2.jpg') }}" alt="">
                            <div class="text">
                                <h3>Andrew Lincoln</h3>
                                <div>New York, USA</div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Customer Testimonials -->

                <!-- Customer Testimonials -->
                <div class="item">
                    <div class="customer-feedback-wrap">
                        <div class="content">
                            <div class="icon"><i class="weddingdir_chat"></i></div>
                            Sed ut perspiciatis unde omnis iste nat error sit voluptatem accusantium doau dantium totam rem aperiam eaque.
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                        <div class="name-wrap">
                            <img src="{{ asset('frontend/Styles/assets/images/feedback_3.jpg') }}" alt="">
                            <div class="text">
                                <h3>Mark Hunter</h3>
                                <div>New York, USA</div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Customer Testimonials -->
            </div>
        </div>
    </section>
    <!-- Customer Feedback End -->

</main>
@endsection


@push('js')

@endpush
