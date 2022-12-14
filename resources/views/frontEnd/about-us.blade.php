@extends('frontEnd.master')

@push('css')

@endpush

@section('content')
    <!--  Page Breadcrumbs Start -->
    <section class="breadcrumbs-page">
        <div class="container">
            <h1>About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.index.page') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--  Page Breadcrumbs End -->

    <main id="body-content">

        <!-- About Intro Start -->
        <section class="wide-tb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 mx-auto">
                        <div class="text-center">
                            <h2 class="fw-7">Who we are</h2>
                            <p>
                                {{ $about }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Intro Start -->

        <!-- Why Choose Start -->
        <section class="wide-tb-90">
            <div class="container">
                <div class="section-title text-center">
                    <h1>Why Choose Rate Restaurant</h1>
                </div>
                <div class="row">

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-4">
                        <div class="icon-box-style-2">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <h4>Trsuted Restaurants</h4 >
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-md-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-4">
                        <div class="icon-box-style-2">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h4>Real Users</h4 >
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <div class="col-md-6 col-lg-4">
                        <div class="icon-box-style-2">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                            <h4>Trusted Feedbacks</h4 >
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose End -->

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
                                <img src="assets/images/feedback_1.jpg" alt="">
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
                                <img src="assets/images/feedback_2.jpg" alt="">
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
                                <img src="assets/images/feedback_3.jpg" alt="">
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

    </main>
@endsection


@push('js')

@endpush
