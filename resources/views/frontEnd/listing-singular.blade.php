@extends('frontEnd.master')

@push('css')

@endpush

@section('content')
<main id="body-content">
    @foreach ($restaurant as $data)
        <!-- Vendor Background Start -->
        <section class="vendor-single-slider">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane " id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
                    <div class="single-img">&nbsp;</div>
                </div>
                <div class="tab-pane show active" id="pills-hr-grid" role="tabpanel" aria-labelledby="pills-hr-grid-tab">
                    <div class="owl-carousel owl-theme" id="slider-vendor-single">
                        @foreach (json_decode($data->images) as $image)
                            <!-- About Slider Images -->
                            <div class="item" style="background-image: url({{ asset('storage/Restaurant/images/' . $image) }});"></div>
                            <!-- About Slider Images -->
                        @endforeach
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
                <div class="row align-items-end">
                    <div class="col-lg-6 mb-0">
                        <div class="profile-single">
                            <h3>{{ $data->title }}</h3>
                            <p><i class="fa fa-map-marker"></i> {{ $data->city }} "{{ $data->address }}"</p>
                            <div class="reviews">
                                <span class="badge"><i class="fa fa-star-half-full"></i> 3.9</span> 8 Reviews
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 text-lg-right mt-lg-0 mt-4">
                        <span class="dropdown hover_out">
                            <a class="btn btn-outline-white mb-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-share-alt"></i> Share
                            </a>

                            <span class="dropdown-menu">
                                <a class="dropdown-item" target="_blank" href="https://facebook.com"><i class="fa fa-facebook-f"></i> Facebook</a>
                                <a class="dropdown-item" target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i> Twitter</a>
                                <a class="dropdown-item" target="_blank" href="https://instagram.com"><i class="fa fa-instagram"></i> Instagram</a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor Profile Single End -->

        <!-- Vendor Profile Navigation -->
        <div class="container vendor-nav-sticky">
            <div class="vendor-nav">
                <a href="#description"><i class="fa fa-file-text"></i> Description</a>
                <a href="#reviews"><i class="fa fa-star-half-full"></i> Reviews</a>
                <a href="#location"><i class="fa fa-map-marker"></i> Location</a>
            </div>
        </div>
        <!-- Vendor Profile Navigation -->

        <section class="wide-tb-90 pt-0">
            <div class="container">
                <div class="row">

                    <!-- Vendor Single Content -->
                    <div class="col-lg-12 col-md-12">

                        <!-- Description -->
                        <div class="card-shadow pos-rel">
                            <a id="description" class="anchor-fake"></a>
                            <div class="card-shadow-header">
                                <h3><i class="fa fa-file-text"></i> Description</h3>
                            </div>
                            <div class="card-shadow-body">
                                <p>{{ $data->description }}</p>
                            </div>
                        </div>
                        <!-- Description -->

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
                        <style>
                            .card {
                                background-color: #ffffff;
                                border: 1px solid rgba(0, 34, 51, 0.1);
                                box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
                                border-radius: 0.15rem;
                                margin-bottom: 2rem;
                            }

                            /* Tabs Card */

                            .tab-card {
                                border:1px solid #eee;
                            }

                            .tab-card-header {
                                background:none;
                            }
                            /* Default mode */
                            .tab-card-header > .nav-tabs {
                                border: none;
                                margin: 0px;
                            }
                            .tab-card-header > .nav-tabs > li {
                                margin-right: 2px;
                            }
                            .tab-card-header > .nav-tabs > li > a {
                                border: 0;
                                border-bottom:2px solid transparent;
                                margin-right: 0;
                                color: #737373;
                                padding: 2px 15px;
                            }

                            .tab-card-header > .nav-tabs > li .active {
                                color: #ffffff;
                                background-color: #00aeaf;
                            }
                            .tab-card-header > .nav-tabs > li > a:hover {
                                color: #ffffff;
                                background-color: #00aeaf;
                            }

                            .tab-card-header > .tab-content {
                            padding-bottom: 0;
                            }
                        </style>

                        <div class="col-12">
                            <div class="card mt-3 tab-card">
                              <div class="card-header tab-card-header">
                                <ul class="nav nav-tabs card-header-tabs d-flex justify-content-center" id="myTab" role="tablist">
                                  <li class="nav-item active">
                                      <a class="nav-link" id="service-tab" data-toggle="tab" href="#Service" role="tab" aria-controls="Service" aria-selected="true">Service</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="food-tab" data-toggle="tab" href="#Food" role="tab" aria-controls="Food" aria-selected="false">Food</a>
                                  </li>
                                </ul>
                              </div>
                      
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active p-3" id="Service" role="tabpanel" aria-labelledby="service-tab">
                                    <div class="card-shadow pos-rel">
                                        <a id="review-form" class="anchor-fake" tabindex="-1"></a>
                                        <div class="card-shadow-header">
                                            <h3><i class="fa fa-pencil"></i> Write Your Feedback About Service</h3>
                                        </div>
                                        <div class="card-shadow-body">
                                            <form action="{{ route('frontend.restaurant.singular.feedback.page.service', $data->id) }}" method="POST">
                                                @csrf

                                                <x-error/>
                                                <x-alert/>
                                                <!-- Leave a Reply -->
                                                  <div class="row mt-4">
                                                      <div class="col-md-12 mb-0">
                                                          <div class="form-group">
                                                              <textarea class="form-control" name="service_feedback" id="editor" rows="5" placeholder="Your Comments"></textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="mt-3">
                                                      <button type="submit" class="btn btn-primary">Post Your Comment</button>
                                                  </div>
                                                  <!-- Leave a Reply -->
                                              </form>
                                        </div>
                                    </div>           
                                </div>

                                <div class="tab-pane fade p-3" id="Food" role="tabpanel" aria-labelledby="food-tab">
                                    <div class="card-shadow pos-rel">
                                        <a id="review-form" class="anchor-fake" tabindex="-1"></a>
                                        <div class="card-shadow-header">
                                            <h3><i class="fa fa-pencil"></i> Write Your Feedback About Food</h3>
                                        </div>
                                        <div class="card-shadow-body">
                                            <form action="{{ route('frontend.restaurant.singular.feedback.page.food', $data->id) }}" method="POST">
                                                @csrf

                                                <x-error/>
                                                <x-alert/>
                                              <!-- Leave a Reply -->
                                                <div class="row mt-4">
                                                    <div class="col-md-12 mb-0">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="food_feedback" id="SecondEditor" rows="5" placeholder="Your Comments"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <button type="submit" class="btn btn-primary">Post Your Comment</button>
                                                </div>
                                                <!-- Leave a Reply -->
                                            </form>
                                        </div>
                                    </div>            
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- Write A Review -->

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
                </div>
            </div>
        </section>
    @endforeach
</main>
@endsection


@push('js')
<script type="text/javascript">
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
    });

    ClassicEditor
        .create( document.querySelector( '#SecondEditor' ) )
        .catch( error => {
            console.error( error );
    });
</script>
@endpush
