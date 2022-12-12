
@extends('frontEnd.master')

@push('css')

@endpush

@section('content')
    <!--  Search Result Header Start -->
    <section class="search-result-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1>Find the Perfect Restaurant</h1>
                    <p class="lead">Search over 360,000 Restaurants with reviews, pricing, availability and more</p>
                    <form action="{{ route('frontend.restaurant-listening.searchByName') }}"
                        method="POST"
                        class="restaurant_search_form_with_name">
                        @csrf

                        <x-error/>
                        <x-alert/>

                        <div class="input-group">
                            <input type="text" name="restaurant_name" class="form-control form-light" placeholder="Enter restaurant name">
                            <input type="text" name="restaurant_city" class="form-control form-light left-border" placeholder="Enter city name">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-default">Search Now</button>
                            </div>
                        </div>
                    </form>
                </div>
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
                                                    <li><a href="javascript:">Dine In</a></li>
                                                    <li><a href="javascript:">Take Away</a></li>
                                                </ul>
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
                            </div>
                            <!-- Sidebar Primary End -->

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
                        </div>

                        <div class="tab-content theme-tabbing search-result-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-listing" role="tabpanel" aria-labelledby="pills-listing-tab">
                                <!-- Search Result List -->
                                @isset($restaurant)
                                    @foreach ($restaurant as $data)
                                        <div class="result-list">
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        @php($Image = json_decode($data->images))
                                                        <a href="{{ route('frontend.singular.restaurant.listening.page', $data->id) }}">
                                                            <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $data->id) }}">{{ $data->title }}</a></h3>
                                                            <div class="rating">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                (22 review)  /  {{ $data->city }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset

                                @isset($restaurants)
                                    @foreach ($restaurants as $restaurantData)
                                        <div class="result-list">
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        @php($Image = json_decode($restaurantData->images))
                                                        <a href="{{ route('frontend.singular.restaurant.listening.page', $restaurantData->id) }}">
                                                            <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $restaurantData->id) }}">{{ $restaurantData->title }}</a></h3>
                                                            <div class="rating">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                (22 review)  /  {{ $restaurantData->city }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset

                                @isset($restaurantsByName)
                                    @foreach ($restaurantsByName as $search)
                                        <div class="result-list">
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        @php($Image = json_decode($search->images))
                                                        <a href="{{ route('frontend.singular.restaurant.listening.page', $search->id) }}">
                                                            <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $search->id) }}">{{ $search->title }}</a></h3>
                                                            <div class="rating">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                (22 review)  /  {{ $search->city }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
                                <!-- Search Result List -->

                                <!-- Search Result Pagination -->
                                <div class="theme-pagination">
                                    @isset($restaurant)
                                        {{ $restaurant->links() }}
                                    @endisset

                                    @isset($restaurants)
                                        {{ $restaurants->links() }}
                                    @endisset

                                    @isset($restaurantsByName)
                                        {{ $restaurantsByName->links() }}
                                    @endisset
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
