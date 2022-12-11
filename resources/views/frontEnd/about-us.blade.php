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
                    <li class="breadcrumb-item"><a href="javascript:"><i class="fa fa-home"></i></a></li>
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
                            <p>WeddingDir is the largest and most trusted global directory connecting engaged couples with local wedding professionals.</p>

                            <p>Maecenas semper dolor metus, a convallis ipsum condimentum ras eros ex, euismod vitae congue ullamcorper id ligula. Maecenas semper dolor metusm ras eros ex, euismod vitae congue ullamcorper id ligula.</p>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Intro Start -->

        <!-- About Slider Start -->
        <section>
            <div class="owl-carousel owl-theme" id="slider-about">
                <!-- About Slider Images -->
                <div class="item">
                    <div class="about-slider">
                        <img src="assets/images/about/slider_img_1.jpg" alt="">
                    </div>
                </div>
                <!-- About Slider Images -->

                <!-- About Slider Images -->
                <div class="item">
                    <div class="about-slider">
                        <img src="assets/images/about/slider_img_3.jpg" alt="">
                    </div>
                </div>
                <!-- About Slider Images -->

                <!-- About Slider Images -->
                <div class="item">
                    <div class="about-slider">
                        <img src="assets/images/about/slider_img_2.jpg" alt="">
                    </div>
                </div>
                <!-- About Slider Images -->
            </div>
        </section>
        <!-- About Slider End -->

        <!-- Why Choose Start -->
        <section class="wide-tb-90">
            <div class="container">
                <div class="section-title text-center">
                    <h1>Why Choose Wedding Dir</h1>
                    <p>Excepteur sint occaecat cupidatat non proident sunt</p>
                </div>
                <div class="row">
                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-box-style-2">
                            <i class="weddingdir_heart_hand"></i>
                            <h4>15 Years Experience</h4 >
                            <p>Sed ut perspiciatis und omnis iste natus errors sit.</p>
                            <a href="javascript:" class="btn btn-link btn-link-secondary">Read more</a>
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-box-style-2">
                            <i class="weddingdir_shopping_bag_heart"></i>
                            <h4>350,000 Vendors</h4 >
                            <p>Sed ut perspiciatis und omnis iste natus errors sit.</p>
                            <a href="javascript:" class="btn btn-link btn-link-secondary">Read more</a>
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-md-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-box-style-2">
                            <i class="weddingdir_heart_envelope"></i>
                            <h4>Trusted Services</h4 >
                            <p>Sed ut perspiciatis und omnis iste natus errors sit.</p>
                            <a href="javascript:" class="btn btn-link btn-link-secondary">Read more</a>
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-box-style-2">
                            <i class="weddingdir_heart_ring"></i>
                            <h4>25K Real Weddings</h4 >
                            <p>Sed ut perspiciatis und omnis iste natus errors sit.</p>
                            <a href="javascript:" class="btn btn-link btn-link-secondary">Read more</a>
                        </div>
                    </div>
                    <!-- Why Choose Icons -->
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
                    <div class="col-lg-6" style="background: url(assets/images/callout_img.jpg) center center no-repeat; background-size: cover;">
                        <img src="assets/images/callout_img.jpg" class="d-lg-none invisible" alt="">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="callout-text">
                            <div class="section-title">
                                <h1>The Best Wedding Vendor Service</h1>
                            </div>
                            <p class="lead">Sed ut perspiciatis unde omnis iste oluptatem accusantium doloremque laud.</p>
                            <a href="contact-us.html" class="btn btn-default btn-rounded btn-lg">Contact Us</a>
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
