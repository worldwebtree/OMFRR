
@extends('frontEnd.master')

@push('css')

@endpush

@section('content')
    <!--  Search Result Header Start -->
    <section class="search-result-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1>Find the Perfect Wedding Vendor</h1>
                    <p class="lead">Search over 360,000 wedding vendors with reviews, pricing, availability and more</p>
                    <div class="input-group">
                        <input type="text" aria-label="First name" class="form-control form-light" placeholder="(E.g. Clifton Springs Weddings)">
                        <input type="text" aria-label="Last name" class="form-control form-light left-border" placeholder="Where">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-default">Search Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-by">
                <strong>View By</strong>
                <a href="javascript:" class="selected-tags">New York <span>X</span></a>
                <a href="javascript:" class="selected-tags">Buffalo <span>X</span></a>
                <a href="javascript:" class="btn btn-link btn-link-primary">Clear all</a>
            </div>
        </div>
    </section>
    <!--  Search Result Header End -->

    <main id="body-content">
        <section class="wide-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <aside class="row sidebar-widgets">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#categoriestypes" role="button" aria-expanded="false" class="link" aria-controls="categoriestypes">
                                        <h3 class="widget-title">Types of Categories <i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="categoriestypes">
                                        <div>
                                            <div class="inner">
                                                <p><a href="javascript:"><strong>All Categories</strong></a></p>

                                                <ul class="list-unstyled">
                                                    <li><a href="javascript:">Barn & Farm Weddings</a></li>
                                                    <li><a href="javascript:">Hotel Weddings</a></li>
                                                    <li><a href="javascript:">Hotel Weddings</a></li>
                                                    <li><a href="javascript:">Country Club Weddings</a></li>
                                                    <li><a href="javascript:">Restaurant Weddings</a></li>
                                                    <li><a href="javascript:">Rooftop Weddings</a></li>
                                                </ul>
                                                <div class="view-all">
                                                    <a href="javascript:" class="btn btn-link-default p-0">+ View More</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#city" role="button" aria-expanded="false" class="link" aria-controls="city">
                                        <h3 class="widget-title">City<i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="city">
                                        <div>
                                            <div class="inner">
                                                <p>
                                                    <input type="text" class="form-control" placeholder="Enter city/town">
                                                </p>

                                                <ul class="list-unstyled">
                                                    <li><a href="javascript:">Buffalo</a></li>
                                                    <li><a href="javascript:">Rochester</a></li>
                                                    <li><a href="javascript:">Canandaigua</a></li>
                                                    <li><a href="javascript:">Geneva</a></li>
                                                    <li><a href="javascript:">Niagara Falls</a></li>
                                                    <li><a href="javascript:">Lockport</a></li>
                                                    <li><a href="javascript:">East Aurora</a></li>
                                                </ul>
                                                <div class="view-all">
                                                    <a href="javascript:" class="btn btn-link-default p-0">+ View More</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#availability" role="button" aria-expanded="false" class="link" aria-controls="availability">
                                        <h3 class="widget-title">Availability<i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="availability">
                                        <div>
                                            <div class="inner">
                                                <div class="datepicker-inline">
                                                    <div data-toggle-inline="datepicker"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#capacity" role="button" aria-expanded="false" class="link" aria-controls="capacity">
                                        <h3 class="widget-title">Maximum Capacity <i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="capacity">
                                        <div>
                                            <div class="inner">
                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="99">
                                                    <label class="custom-control-label" for="99">0 - 99</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="199">
                                                    <label class="custom-control-label" for="199">100 - 199</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="299">
                                                    <label class="custom-control-label" for="299">200 - 299</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="399">
                                                    <label class="custom-control-label" for="399">300 - 399</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="400+">
                                                    <label class="custom-control-label" for="400+">400+</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#settings" role="button" aria-expanded="false" class="link" aria-controls="settings">
                                        <h3 class="widget-title">Settings<i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="settings">
                                        <div>
                                            <div class="inner">
                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="indoor">
                                                    <label class="custom-control-label" for="indoor">Indoor</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="covered">
                                                    <label class="custom-control-label" for="covered">Covered Outdoor</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="uncovered">
                                                    <label class="custom-control-label" for="uncovered">Uncovered Outdoor</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#amenities" role="button" aria-expanded="false" class="link" aria-controls="amenities">
                                        <h3 class="widget-title">Amenities<i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="amenities">
                                        <div>
                                            <div class="inner">
                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="accommodations">
                                                    <label class="custom-control-label" for="accommodations">Accommodations</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="barservices">
                                                    <label class="custom-control-label" for="barservices">Bar Services</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="catering">
                                                    <label class="custom-control-label" for="catering">Catering Services</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="cleanup">
                                                    <label class="custom-control-label" for="cleanup">Clean Up</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="eventplanner">
                                                    <label class="custom-control-label" for="eventplanner">Event Planner</label>
                                                </div>

                                                <div class="custom-control custom-checkbox form-dark mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="eventrentals">
                                                    <label class="custom-control-label" for="eventrentals">Event Rentals</label>
                                                </div>

                                                <div class="view-all">
                                                    <a href="javascript:" class="btn btn-link-default p-0">+ View More</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Secondary End -->

                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="result-count">
                            <strong>244 results:</strong>
                            <ul class="nav nav-pills theme-tabbing list-style-map" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link show active" id="pills-listing-tab" data-toggle="pill" href="#pills-listing" role="tab" aria-controls="pills-listing" aria-selected="false"><i class="fa fa-list-ul"></i> List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-images-tab" data-toggle="pill" href="#pills-images" role="tab" aria-controls="pills-images" aria-selected="true"><i class="fa fa-th-large"></i> Images</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false"><i class="fa fa-map-marker"></i> Map</a>
                                </li>
                            </ul>
                            <!-- <span class="list-style-map">
                                <a href="javascript:" class="active"></a>
                                <a href="javascript:"></a>
                                <a href="javascript:"></a>
                            </span> -->
                        </div>

                        <div class="tab-content theme-tabbing search-result-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-listing" role="tabpanel" aria-labelledby="pills-listing-tab">
                                <!-- Search Result List -->
                                <div class="result-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <span class="featured">
                                                    <i class="fa fa-star"></i>
                                                    <span>Featured</span>
                                                </span>
                                                <a href="javascript:"><img src="assets/images/search/search_img_1.jpg" alt="" class="rounded"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="content">
                                                <div class="head">
                                                    <a href="javascript:" class="favorite active"><i class="fa fa-heart"></i></a>
                                                    <h3><a href="javascript:">Lotus Wedding Florist</a></h3>
                                                    <div class="rating">
                                                        <span class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        (22 review)  /  Surat, Gujrat, India
                                                    </div>
                                                </div>
                                                <p>Nullam facilisis massa id elit ornare lobortised convallis purus ac tincidunt efficiturstibulum et rutrum onec vitae finibus quaenean dignissim nibh vel ante accumsan sagittis. Integer gravida aliquet auctor.</p>
                                                <div class="bottom">
                                                    <span class="badge border rounded p-2">Guests 1 to 200</span>
                                                    <a href="javascript:" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#request_quote">Request Pricing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Result List -->

                                <!-- Search Result List -->
                                <div class="result-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <span class="featured">
                                                    <i class="fa fa-star"></i>
                                                    <span>Featured</span>
                                                </span>
                                                <a href="javascript:"><img src="assets/images/search/search_img_2.jpg" alt="" class="rounded"></a>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="content">
                                                <div class="head">
                                                    <a href="javascript:" class="favorite"><i class="fa fa-heart"></i></a>
                                                    <h3><a href="javascript:">Lotus Wedding Florist</a></h3>
                                                    <div class="rating">
                                                        <span class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        (22 review)  /  Surat, Gujrat, India
                                                    </div>
                                                </div>
                                                <p>Nullam facilisis massa id elit ornare lobortised convallis purus ac tincidunt efficiturstibulum et rutrum onec vitae finibus quaenean dignissim nibh vel ante accumsan sagittis. Integer gravida aliquet auctor.</p>
                                                <div class="bottom">
                                                    <span class="badge border rounded p-2">Guests 1 to 200</span>
                                                    <a href="javascript:" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#request_quote">Request Pricing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Result List -->

                                <!-- Search Result List -->
                                <div class="result-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <a href="javascript:"><img src="assets/images/search/search_img_3.jpg" alt="" class="rounded"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="content">
                                                <div class="head">
                                                    <a href="javascript:" class="favorite"><i class="fa fa-heart"></i></a>
                                                    <h3><a href="javascript:">Lotus Wedding Florist</a></h3>
                                                    <div class="rating">
                                                        <span class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        (22 review)  /  Surat, Gujrat, India
                                                    </div>
                                                </div>
                                                <p>Nullam facilisis massa id elit ornare lobortised convallis purus ac tincidunt efficiturstibulum et rutrum onec vitae finibus quaenean dignissim nibh vel ante accumsan sagittis. Integer gravida aliquet auctor.</p>
                                                <div class="bottom">
                                                    <span class="badge border rounded p-2">Guests 1 to 200</span>
                                                    <a href="javascript:" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#request_quote">Request Pricing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Result List -->

                                <!-- Search Result List -->
                                <div class="result-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <a href="javascript:"><img src="assets/images/search/search_img_4.jpg" alt="" class="rounded"></a>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="content">
                                                <div class="head">
                                                    <a href="javascript:" class="favorite"><i class="fa fa-heart"></i></a>
                                                    <h3><a href="javascript:">Lotus Wedding Florist</a></h3>
                                                    <div class="rating">
                                                        <span class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        (22 review)  /  Surat, Gujrat, India
                                                    </div>
                                                </div>
                                                <p>Nullam facilisis massa id elit ornare lobortised convallis purus ac tincidunt efficiturstibulum et rutrum onec vitae finibus quaenean dignissim nibh vel ante accumsan sagittis. Integer gravida aliquet auctor.</p>
                                                <div class="bottom">
                                                    <span class="badge border rounded p-2">Guests 1 to 200</span>
                                                    <a href="javascript:" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#request_quote">Request Pricing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Result List -->

                                <!-- Search Result List -->
                                <div class="result-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <a href="javascript:"><img src="assets/images/search/search_img_5.jpg" alt="" class="rounded"></a>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="content">
                                                <div class="head">
                                                    <a href="javascript:" class="favorite"><i class="fa fa-heart"></i></a>
                                                    <h3><a href="javascript:">Lotus Wedding Florist</a></h3>
                                                    <div class="rating">
                                                        <span class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        (22 review)  /  Surat, Gujrat, India
                                                    </div>
                                                </div>
                                                <p>Nullam facilisis massa id elit ornare lobortised convallis purus ac tincidunt efficiturstibulum et rutrum onec vitae finibus quaenean dignissim nibh vel ante accumsan sagittis. Integer gravida aliquet auctor.</p>
                                                <div class="bottom">
                                                    <span class="badge border rounded p-2">Guests 1 to 200</span>
                                                    <a href="javascript:" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#request_quote">Request Pricing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Result List -->

                                <!-- Search Result List -->
                                <div class="result-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <a href="javascript:"><img src="assets/images/search/search_img_6.jpg" alt="" class="rounded"></a>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="content">
                                                <div class="head">
                                                    <a href="javascript:" class="favorite"><i class="fa fa-heart"></i></a>
                                                    <h3><a href="javascript:">Lotus Wedding Florist</a></h3>
                                                    <div class="rating">
                                                        <span class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        (22 review)  /  Surat, Gujrat, India
                                                    </div>
                                                </div>
                                                <p>Nullam facilisis massa id elit ornare lobortised convallis purus ac tincidunt efficiturstibulum et rutrum onec vitae finibus quaenean dignissim nibh vel ante accumsan sagittis. Integer gravida aliquet auctor.</p>
                                                <div class="bottom">
                                                    <span class="badge border rounded p-2">Guests 1 to 200</span>
                                                    <a href="javascript:" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#request_quote">Request Pricing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Result List -->

                                <!-- Search Result List -->
                                <div class="result-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <a href="javascript:"><img src="assets/images/search/search_img_7.jpg" alt="" class="rounded"></a>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="content">
                                                <div class="head">
                                                    <a href="javascript:" class="favorite"><i class="fa fa-heart"></i></a>
                                                    <h3><a href="javascript:">Lotus Wedding Florist</a></h3>
                                                    <div class="rating">
                                                        <span class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        (22 review)  /  Surat, Gujrat, India
                                                    </div>
                                                </div>
                                                <p>Nullam facilisis massa id elit ornare lobortised convallis purus ac tincidunt efficiturstibulum et rutrum onec vitae finibus quaenean dignissim nibh vel ante accumsan sagittis. Integer gravida aliquet auctor.</p>
                                                <div class="bottom">
                                                    <span class="badge border rounded p-2">Guests 1 to 200</span>
                                                    <a href="javascript:" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#request_quote">Request Pricing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Result List -->

                                <!-- Search Result Pagination -->
                                <div class="theme-pagination">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Post Pagination -->
                            </div>
                            <div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
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
                                                        <a class="tags" href="javascript.html">
                                                            Fashion
                                                        </a>
                                                        <a class="favorite" href="javascript.html">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="javascript:">Happy Wedding Fashions <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
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

                                    <div class="col-lg-6 col-md-6">
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
                                                        <a class="tags" href="javascript.html">
                                                            Photography
                                                        </a>
                                                        <a class="favorite" href="javascript.html">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="javascript:">Cool Wed Photography <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
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

                                    <div class="col-lg-6 col-md-6">
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
                                                        <a class="tags" href="javascript.html">
                                                            Flora
                                                        </a>
                                                        <a class="favorite" href="javascript.html">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="javascript:">Lotus Wedding Florist <span class="verified"><i class="fa fa-check-circle"></i></span></a></h3>
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

                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                                <div id="map-holder">
                                    <div id="map_extended" class="vendor-single-popup-wrap">
                                        <p>This will be replaced with the Google Map.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


@push('js')

@endpush
