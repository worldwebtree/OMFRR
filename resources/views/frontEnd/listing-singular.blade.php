@extends('frontEnd.master')

@push('css')

@endpush

@section('content')
<main id="body-content">



    <!-- Vendor Background Start -->
    <section class="vendor-single-slider">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane " id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
                <div class="single-img">&nbsp;</div>
            </div>
            <div class="tab-pane show active" id="pills-hr-grid" role="tabpanel" aria-labelledby="pills-hr-grid-tab">
                <div class="owl-carousel owl-theme" id="slider-vendor-single">
                    <!-- About Slider Images -->
                    <div class="item" style="background-image: url(assets/images/vendors/vendor_slider_1.jpg);">

                    </div>
                    <!-- About Slider Images -->

                    <!-- About Slider Images -->
                    <div class="item" style="background-image: url(assets/images/vendors/vendor_slider_2.jpg);">

                    </div>
                    <!-- About Slider Images -->

                    <!-- About Slider Images -->
                    <div class="item" style="background-image: url(assets/images/vendors/vendor_slider_3.jpg);">

                    </div>
                    <!-- About Slider Images -->
                </div>
            </div>
            <div class="tab-pane" id="pills-streetview" role="tabpanel" aria-labelledby="pills-streetview-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1607331008276!6m8!1m7!1sCAoSLEFGMVFpcFByZ2V2ako1MG1HTW9fVEhtUlJzYlNUZUxUUDIwaTJxM0s1YS1M!2m2!1d33.8126567!2d-117.9189792!3f25.80201492461224!4f19.61613938587837!5f0.7820865974627469" height="597" width="100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="tab-pane" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <div class="slider-frame">
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&amp;mute=1"></iframe>
                </div>
            </div>
            <div class="tab-pane" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                <div class="slider-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
                </div>
            </div>
        </div>

    </section>
    <!-- Vendor Background End -->

    <!-- Vendor Profile Single Start -->
    <div class="vendor-profile-single">
        <div class="container pos-rel">
            <div class="vendor-tab-circle">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-gallery-tab" data-toggle="pill" href="#pills-gallery" role="tab" aria-controls="pills-gallery" aria-selected="true"><i class="fa fa-image"></i></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-hr-grid-tab" data-toggle="pill" href="#pills-hr-grid" role="tab" aria-controls="pills-hr-grid" aria-selected="false"><i class="fa fa-th-large"></i></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-streetview-tab" data-toggle="pill" href="#pills-streetview" role="tab" aria-controls="pills-streetview" aria-selected="false"><i class="fa fa-street-view"></i>                            </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false"><i class="fa fa-video-camera"></i></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false"><i class="fa fa-map-marker"></i></a>
                    </li>
                </ul>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-6 mb-0">
                    <div class="profile-single">
                        <h3>Matrimony Wedding Photography</h3>
                        <p><i class="fa fa-map-marker"></i>  Dorothea Lane, New York</p>
                        <div class="reviews">
                            <span class="badge"><i class="fa fa-star-half-full"></i> 3.9</span> 8 Reviews
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-lg-right mt-lg-0 mt-4">
                    <a href="javascript:" class="btn btn-outline-white mb-2"><i class="fa fa-heart-o"></i> Favorite</a>
                    <span class="dropdown hover_out">
                        <a class="btn btn-outline-white mb-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-share-alt"></i> Share
                        </a>

                        <span class="dropdown-menu">
                          <a class="dropdown-item" href="javascript:"><i class="fa fa-facebook-f"></i> Facebook</a>
                          <a class="dropdown-item" href="javascript:"><i class="fa fa-twitter"></i> Twitter</a>
                          <a class="dropdown-item" href="javascript:"><i class="fa fa-instagram"></i> Instagram</a>
                          <a class="dropdown-item" href="javascript:"><i class="fa fa-envelope-o"></i> Email</a>
                        </span>
                    </span>
                    <a href="javascript:" class="btn btn-outline-white mb-2"><i class="fa fa-envelope-o"></i> Inbox</a>
                    <a href="javascript:" class="btn btn-primary mb-2"><i class="fa fa-check"></i> Claim Listing</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor Profile Single End -->

    <!-- Vendor Profile Navigation -->
    <div class="container vendor-nav-sticky">
        <div class="vendor-nav">
            <a href="#description"><i class="fa fa-file-text"></i> Description</a>
            <a href="#amenities"><i class="fa fa-list"></i> Amenities</a>
            <a href="#gallery"><i class="fa fa-image"></i> Gallery</a>
            <a href="#videos"><i class="fa fa-video-camera"></i> Videos</a>
            <a href="#reviews"><i class="fa fa-star-half-full"></i> Reviews</a>
            <a href="#faq"><i class="fa fa-question-circle"></i> Faq’s</a>
            <a href="#location"><i class="fa fa-map-marker"></i> Location</a>
        </div>
    </div>
    <!-- Vendor Profile Navigation -->

    <section class="wide-tb-90 pt-0">
        <div class="container">
            <div class="row">

                <!-- Vendor Single Content -->
                <div class="col-lg-8 col-md-12">

                    <!-- Description -->
                    <div class="card-shadow pos-rel">
                        <a id="description" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-file-text"></i> Description</h3>
                        </div>
                        <div class="card-shadow-body">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia.</p>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <!-- Description -->

                    <!-- Amenities -->
                    <div class="card-shadow pos-rel">
                        <a id="amenities" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-list"></i> Amenities</h3>
                        </div>
                        <div class="card-shadow-body">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="icon-box-style-3">
                                        <i class="fa fa-clock-o"></i>24 Hours
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="icon-box-style-3">
                                        <i class="fa fa-coffee"></i>Breakfast
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="icon-box-style-3">
                                        <i class="fa fa-mobile"></i>Online Order
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="icon-box-style-3">
                                        <i class="fa fa-cutlery"></i>Reservation
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="icon-box-style-3">
                                        <i class="fa fa-wifi"></i>Wi-FI
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Amenities -->

                    <!-- Gallery -->
                    <div class="card-shadow pos-rel">
                        <a id="gallery" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-image"></i> Gallery</h3>
                        </div>
                        <div class="card-shadow-body">
                            <div class="row vendor-img-gallery">
                                <div class="col-md-3 mb-0">
                                    <div class="vendor-gallery">
                                        <a href="assets/images/vendors/vendor_img_1.jpg" title="Title come here">
                                            <img src="assets/images/vendors/vendor_img_1.jpg" class="rounded" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-0">
                                    <div class="vendor-gallery">
                                        <a href="assets/images/vendors/vendor_img_2.jpg" title="Title come here">
                                            <img src="assets/images/vendors/vendor_img_2.jpg" class="rounded" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-0">
                                    <div class="vendor-gallery">
                                        <a href="assets/images/vendors/vendor_img_3.jpg" title="Title come here">
                                            <img src="assets/images/vendors/vendor_img_3.jpg" class="rounded" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-0">
                                    <div class="vendor-gallery">
                                        <a href="assets/images/vendors/vendor_img_4.jpg" title="Title come here">
                                            <img src="assets/images/vendors/vendor_img_4.jpg" class="rounded" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="vendor-img-gallery">
                                <div class="row vendor-img-gallery">
                                    <div class="col-md-3 mb-0">
                                        <div class="vendor-gallery">
                                            <a href="assets/images/vendors/vendor_img_5.jpg" title="Title come here">
                                                <img src="assets/images/vendors/vendor_img_5.jpg" class="rounded" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-0">
                                        <div class="vendor-gallery">
                                            <a href="assets/images/vendors/vendor_img_6.jpg" title="Title come here">
                                                <img src="assets/images/vendors/vendor_img_6.jpg" class="rounded" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-0">
                                        <div class="vendor-gallery">
                                            <a href="assets/images/vendors/vendor_img_7.jpg" title="Title come here">
                                                <img src="assets/images/vendors/vendor_img_7.jpg" class="rounded" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-btn">
                                <a data-toggle="collapse" href="#vendor-img-gallery" role="button" aria-expanded="false" class="collapsed"><i class="fa fa-angle-down"></i> <span>3 More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery -->

                    <!-- Videos -->
                    <div class="card-shadow pos-rel">
                        <a id="videos" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-video-camera"></i> Videos</h3>
                        </div>
                        <div class="card-shadow-body">
                            <div class="vendor-video">
                                <a class="popup-video" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                    <i class="fa fa-play"></i>
                                    <img src="assets/images/vendors/vendor_video.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Videos -->

                    <!-- Reviews -->
                    <div class="card-shadow pos-rel">
                        <a id="reviews" class="anchor-fake"></a>
                        <div class="card-shadow-header d-md-flex justify-content-between align-items-center">
                            <h3><i class="fa fa-star-o"></i> Reviews For Matrimony Wedding Photography</h3>
                            <a href="#review-form" class="btn btn-sm btn-dark mt-3 mt-md-0" id="write-review-form">Write A Review</a>
                        </div>
                        <div class="card-shadow-body border-bottom">
                            <div class="row no-gutters">
                                <div class="col-md-auto">
                                    <div class="review-count">
                                        <span>3.8</span>
                                        <small>out of 5.0</small>
                                        <div class="stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-smile-o"></i> <span class="review-each-count">4.9</span>
                                                </div>
                                                <div class="count">
                                                    <strong>Quality Service</strong>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-exchange"></i> <span class="review-each-count">3.7</span>
                                                </div>
                                                <div class="count">
                                                    <strong>Facilities</strong>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled" style="width: 67%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-male"></i> <span class="review-each-count">4.0</span>
                                                </div>
                                                <div class="count">
                                                    <strong>Staff</strong>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled" style="width: 75%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-sliders"></i> <span class="review-each-count">4.9</span>
                                                </div>
                                                <div class="count">
                                                    <strong>Flexibility</strong>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-dollar"></i> <span class="review-each-count">4.9</span>
                                                </div>
                                                <div class="count">
                                                    <strong>Value of money</strong>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-shadow-body d-md-flex justify-content-between align-items-center py-3">
                            <strong>19 Reviews for Matrimony Wedding Photography</strong>
                            <div class="d-flex align-items-center col-md-5 col-12 p-0 mt-3 mt-md-0">
                                <small class="text-nowrap mr-3 ">Sort by</small>
                                <select class="theme-combo" name="state">
                                    <option value="AL">Rating: Highest</option>
                                    <option value="WY">Rating: Lowest</option>
                                    <option value="WY">Rating: Dates</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-shadow-body border-top">
                            <!-- Review Media -->
                            <div class="reviews-media">
                                <div class="media">
                                    <img class="thumb" src="assets/images/thumb_img_1.jpg" alt="">
                                    <div class="media-body">
                                        <div class="heading-wrap no-gutters">
                                            <div class="heading">
                                                <div class="col pl-0">
                                                    <h4 class="mb-0">Karon Balina</h4>
                                                    <div class="review-option-btn">
                                                        <a data-toggle="collapse" href="#review-option-toggle-1" role="button" aria-expanded="false" class="collapsed">
                                                            <span class="stars">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                            <span>4.2 <i class="fa fa-angle-down arrow"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <small>Married on 17, Sep, 2020</small>
                                                </div>
                                            </div>
                                            <div id="review-option-toggle-1" class="collapse" >
                                                <div class="row">
                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-smile-o"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Quality Service</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-exchange"></i> <span class="review-each-count">3.7</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Facilities</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 67%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-male"></i> <span class="review-each-count">4.0</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Staff</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 75%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-sliders"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Flexibility</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-dollar"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Value of money</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="fw-7">Excellent service</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Media -->

                            <!-- Review Media -->
                            <div class="reviews-media">
                                <div class="media">
                                    <img class="thumb" src="assets/images/thumb_img_3.jpg" alt="">
                                    <div class="media-body">
                                        <div class="heading-wrap no-gutters">
                                            <div class="heading">
                                                <div class="col pl-0">
                                                    <h4 class="mb-0">Karon Balina</h4>
                                                    <div class="review-option-btn">
                                                        <a data-toggle="collapse" href="#review-option-toggle-2" role="button" aria-expanded="false" class="collapsed">
                                                            <span class="stars">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                            <span>4.2 <i class="fa fa-angle-down arrow"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <small>Married on 17, Sep, 2020</small>
                                                </div>
                                            </div>
                                            <div id="review-option-toggle-2" class="collapse" >
                                                <div class="row">
                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-smile-o"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Quality Service</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-exchange"></i> <span class="review-each-count">3.7</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Facilities</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 67%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-male"></i> <span class="review-each-count">4.0</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Staff</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 75%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-sliders"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Flexibility</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-dollar"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Value of money</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="fw-7">Excellent service</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="media reply-box">
                                            <img src="assets/images/thumb_img_2.jpg" alt="" class="thumb ">
                                            <div class="media-body">
                                                <div class="d-md-flex justify-content-between mb-3">
                                                    <h4 class="mb-0">Sofia Lorence</h4>
                                                    <small class="txt-blue">17, Aug, 2020</small>
                                                </div>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                                purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Media -->

                            <!-- Review Media -->
                            <div class="reviews-media">
                                <div class="media">
                                    <img class="thumb" src="assets/images/thumb_img_4.jpg" alt="">
                                    <div class="media-body">
                                        <div class="heading-wrap no-gutters">
                                            <div class="heading">
                                                <div class="col pl-0">
                                                    <h4 class="mb-0">Karon Balina</h4>
                                                    <div class="review-option-btn">
                                                        <a data-toggle="collapse" href="#review-option-toggle-3" role="button" aria-expanded="false" class="collapsed">
                                                            <span class="stars">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                            <span>4.2 <i class="fa fa-angle-down arrow"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <small>Married on 17, Sep, 2020</small>
                                                </div>
                                            </div>
                                            <div id="review-option-toggle-3" class="collapse" >
                                                <div class="row">
                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-smile-o"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Quality Service</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-exchange"></i> <span class="review-each-count">3.7</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Facilities</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 67%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-male"></i> <span class="review-each-count">4.0</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Staff</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 75%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-sliders"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Flexibility</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                    <!-- review-option -->
                                                    <div class="col-md-4">
                                                        <div class="review-option">
                                                            <div class="icon">
                                                                <i class="fa fa-dollar"></i> <span class="review-each-count">4.9</span>
                                                            </div>
                                                            <div class="count">
                                                                <strong>Value of money</strong>
                                                                <div>
                                                                    <div class="bar-base">
                                                                        <div class="bar-filled" style="width: 80%;">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- review-option -->

                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="fw-7">Best weekend ever</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Media -->

                            <div class="text-center">
                                <a href="javascript:" class="btn btn-default btn-rounded">See more reviews</a>
                            </div>
                        </div>
                    </div>
                    <!-- Reviews -->

                    <!-- Write A Review -->
                    <div class="card-shadow pos-rel" >
                        <a id="review-form" class="anchor-fake" tabindex="-1"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-pencil"></i> Write A Review</h3>
                        </div>
                        <div class="card-shadow-body">

                            <div class="row rating-stars-wrap">
                                <!-- review-option -->
                                <div class="col-md-4 col-6 mb-3 mb-md-0">
                                    <div class="review-option">
                                        <div class="icon">
                                            <i class="fa fa-smile-o"></i>
                                        </div>
                                        <div class="count">
                                            <strong>Quality Service</strong>
                                            <div class="rating-stars">
                                                <a href="#5" title="Give 5 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#4" title="Give 4 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#3" title="Give 3 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#2" title="Give 2 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#1" title="Give 1 star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- review-option -->

                                <!-- review-option -->
                                <div class="col-md-4 col-6 mb-3 mb-md-0">
                                    <div class="review-option">
                                        <div class="icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <div class="count">
                                            <strong>Facilities</strong>
                                            <div class="rating-stars">
                                                <a href="#5" title="Give 5 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#4" title="Give 4 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#3" title="Give 3 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#2" title="Give 2 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#1" title="Give 1 star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- review-option -->

                                <!-- review-option -->
                                <div class="col-md-4 col-6 mb-3 mb-md-0">
                                    <div class="review-option">
                                        <div class="icon">
                                            <i class="fa fa-male"></i>
                                        </div>
                                        <div class="count">
                                            <strong>Staff</strong>
                                            <div class="rating-stars">
                                                <a href="#5" title="Give 5 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#4" title="Give 4 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#3" title="Give 3 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#2" title="Give 2 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#1" title="Give 1 star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- review-option -->

                                <!-- review-option -->
                                <div class="col-md-4 col-6 mb-3 mb-md-0">
                                    <div class="review-option">
                                        <div class="icon">
                                            <i class="fa fa-sliders"></i>
                                        </div>
                                        <div class="count">
                                            <strong>Flexibility</strong>
                                            <div class="rating-stars">
                                                <a href="#5" title="Give 5 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#4" title="Give 4 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#3" title="Give 3 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#2" title="Give 2 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#1" title="Give 1 star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- review-option -->

                                <!-- review-option -->
                                <div class="col-md-4 col-6 mb-3 mb-md-0">
                                    <div class="review-option">
                                        <div class="icon">
                                            <i class="fa fa-dollar"></i>
                                        </div>
                                        <div class="count">
                                            <strong>Value of money</strong>
                                            <div class="rating-stars">
                                                <a href="#5" title="Give 5 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#4" title="Give 4 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#3" title="Give 3 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#2" title="Give 2 stars"><i class="fa fa-star-o"></i></a>
                                                <a href="#1" title="Give 1 star"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- review-option -->

                            </div>

                            <!-- Leave a Reply -->
                            <div class="row mt-4">
                                <div class="col-md-12 mb-0">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Your Comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Post Your Comment</button>
                            </div>
                            <!-- Leave a Reply -->
                        </div>
                    </div>
                    <!-- Write A Review -->

                    <!-- Faq’s -->
                    <div class="card-shadow pos-rel" >
                        <a id="faq" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-question-circle"></i> Faq’s</h3>
                        </div>
                        <div class="card-shadow-body p-0">
                            <table class="table mb-0 table-faqs">
                                <tbody>
                                    <tr>
                                        <th>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia</th>
                                        <td><span class="txt-orange">Yes</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Proin viverra tincidunt lectus at sodales. Nam vitae dolor ipsum.</th>
                                        <td><span class="txt-orange">$ 2500</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Aenean at molestie nisl, id rhoncus orci. Suspendisse et. </th>
                                        <td colspan="2">
                                            <ul class="list-unstyled icons-listing">
                                                <li>Clean Up</li>
                                                <li>Event Planning</li>
                                                <li>Parking</li>
                                                <li>Set Up</li>
                                                <li>Premium Liquor</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia</th>
                                        <td><span class="txt-orange">Yes</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia</th>
                                        <td><span class="txt-orange">$ 40</span></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Faq’s -->

                    <!-- Location -->
                    <div class="card-shadow pos-rel">
                        <a id="location" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-map-marker"></i> Location</h3>
                        </div>
                        <div class="card-shadow-body">
                            <div id="map-holder">
                                <div id="map_extended" class="vendor-single-popup-wrap">
                                    <p>This will be replaced with the Google Map.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Location -->

                </div>
                <!-- Vendor Single Content -->

                <!-- Vendor Sidebar -->
                <div class="col-lg-4 col-md-12">
                    <aside class="row sidebar-widgets">
                        <!-- Sidebar Primary Start -->
                        <div class="sidebar-primary col-lg-12 col-md-6">

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Message Vendor</h3>

                                <div class="request-quote-form">
                                    <div class="form-group">
                                        <input type="text" placeholder="First and last name" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" placeholder="Phone Number" class="form-control" />
                                    </div>
                                    <div class="form-group pos-rel">
                                        <input type="text" class="form-control datepicker" placeholder="Choose Date" />
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="6" placeholder="Your message" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <p><strong><small class="txt-orange">Preferred Contact Method</small></strong></p>

                                        <div class="custom-control custom-radio custom-control-inline mb-3">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Call</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mb-3">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Email</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mb-3">
                                            <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline3">Video call</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <small class="form-text text-muted">By clicking <span class="txt-orange">'Request pricing'</span>, I agree to WeddingDir’s <a href="javascript:" class="text-underline">Privacy Policy</a> and <a href="javascript:">Terms of Use</a> </small>
                                    </div>
                                    <button type="button" class="btn btn-primary">Request Pricing</button>
                                </div>
                            </div>
                            <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Availability</h3>
                                <div class="datepicker-inline">
                                    <div data-toggle-inline="datepicker"></div>
                                </div>
                            </div>
                            <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Categories</h3>

                                <div class="icon-box-style-3 sided">
                                    <i class="fa fa-camera"></i>
                                    <span> Photography</span>
                                </div>
                            </div>
                            <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Statistics</h3>

                                <div class="row">
                                    <div class="col-6 mb-0">
                                        <div class="icon-box-style-3 sided">
                                            <i class="fa fa-eye"></i>
                                            <span> 7521</span>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-0">
                                        <div class="icon-box-style-3 sided">
                                            <i class="fa fa-star-o"></i>
                                            <span> 8 Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-0">
                                        <div class="icon-box-style-3 sided">
                                            <i class="fa fa-share"></i>
                                            <span> 24 Share</span>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-0">
                                        <div class="icon-box-style-3 sided">
                                            <i class="fa fa-heart-o"></i>
                                            <span> 99 Favorite</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Widget Wrap -->

                            <div></div>
                        </div>
                        <!-- Sidebar Primary End -->

                        <!-- Sidebar Secondary Start -->
                        <div class="sidebar-secondary col-lg-12 col-md-6">
                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Working Hours</h3>

                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    Monday
                                    <span class="badge border rounded p-2">09:00 AM - 07:00 AM</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    Tuesday
                                    <span class="badge border rounded p-2">09:00 AM - 07:00 AM</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    Wednesday
                                    <span class="badge border rounded p-2">09:00 AM - 07:00 AM</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    Thursday
                                    <span class="badge border rounded p-2">09:00 AM - 07:00 AM</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    Friday
                                    <span class="badge border rounded p-2">09:00 AM - 07:00 AM</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    Saturday
                                    <span class="badge border rounded p-2">10:00 AM - 09:00 AM</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    Sunday
                                    <span class="badge border rounded p-2">10:00 AM - 09:00 AM</span>
                                </div>
                            </div>
                            <!-- Widget Wrap -->


                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Author Profile</h3>

                                <div class="profile-avatar">
                                    <img src="assets/images/author_profile.jpg" alt="">
                                    <div class="content">
                                        <small>Added By</small>
                                        Tom Wilson
                                    </div>
                                </div>

                                <p>Proin viverra tincidunt lectus at sodales. Nam vitae dolor ipsum. Aenean at molestie nisl, id rhoncus orci.</p>

                                <div class="icon-box-style-3 sided mt-3 mb-0">
                                    <i class="fa fa-phone"></i>
                                    <span> +12 345 678 910</span>
                                </div>

                                <div class="icon-box-style-3 sided mt-3 mb-0">
                                    <i class="fa fa-envelope-o"></i>
                                    <span> <a href="javascript:" class="btn-link btn-link-secondary">tom.wilson@site.com</a> </span>
                                </div>

                                <div class="icon-box-style-3 sided mt-3 mb-0">
                                    <i class="fa fa-phone"></i>
                                    <span> <a href="javascript:" class="btn-link btn-link-secondary">https://mybusiness.food</a> </span>
                                </div>

                                <div class="social-sharing sidebar-social border-top">
                                    <a href="javascript:" class="share-btn-facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:" class="share-btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:" class="share-btn-instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="javascript:" class="share-btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Featured Listing</h3>
                                <div class="owl-carousel owl-theme" id="wedding-listing-single">
                                    <!-- Wedding Lisiting Single -->
                                    <div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="javascript:">
                                                    <img src="assets/images/weddings/wedding_listing_1.jpg" alt="">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">
                                                        <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span>
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="javascript:">
                                                            Fashion
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
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
                                    <!-- Wedding Lisiting Single -->

                                    <!-- Wedding Lisiting Single -->
                                    <div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="javascript:">
                                                    <img src="assets/images/weddings/wedding_listing_2.jpg" alt="">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span>
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="javascript:">
                                                            Photography
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
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
                                    <!-- Wedding Lisiting Single -->

                                    <!-- Wedding Lisiting Single -->
                                    <div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="javascript:">
                                                    <img src="assets/images/weddings/wedding_listing_3.jpg" alt="">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">
                                                        <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span>
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="javascript:">
                                                            Flora
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
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
                                    <!-- Wedding Lisiting Single -->
                                </div>
                            </div>
                            <!-- Widget Wrap -->
                        </div>
                        <!-- Sidebar Secondary End -->


                    </aside>
                </div>
                <!-- Vendor Sidebar -->
            </div>
        </div>
    </section>


</main>
@endsection


@push('js')

@endpush
