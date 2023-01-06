@extends('frontEnd.master')

@section('title')
Restaurant Listning
@endsection

@push('css')

@endpush

@section('content')
    <!--  Search Result Header Start -->
    <section class="search-result-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1 class="text-capitalize">find through name and city</h1>
                    @php($totalRestaurants = App\Models\Admin\PostRestaurant::count())
                    <p class="lead">Search over {{ $totalRestaurants }} Restaurants with reviews and more</p>
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
                                                <ul class="list-unstyled">
                                                    <li><a href="{{ route('frontend.restaurant-listening.search.by.category', 'Dine In') }}">Dine In</a></li>
                                                    <li><a href="{{ route('frontend.restaurant-listening.search.by.category', 'Take Away') }}">Take Away</a></li>
                                                    <li><a href="{{ route('frontend.restaurant-listening.search.by.category', 'Dine In & Take Away') }}">Dine In & Take Away</a></li>
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
                                                    @php($location = App\Models\Admin\PostRestaurant::getRestaurantLocation())
                                                    @foreach ($location as $index => $name)
                                                        <li>
                                                            <a href="{{ route('frontend.restaurant-listening.search.by.location', $name) }}">{{ $name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
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
                            @isset($restaurant)
                                <strong>{{ $restaurant->count() }} results:</strong>
                            @endisset
                            @isset($restaurants)
                                <strong>{{ $restaurants->count() }} results:</strong>
                            @endisset
                            @isset($restaurantsByName)
                                <strong>{{ $restaurantsByName->count() }} results:</strong>
                            @endisset
                            @isset($restaurantsByCategory)
                                <strong>{{ $restaurantsByCategory->count() }} results:</strong>
                            @endisset
                            @isset($restaurantsByLocation)
                                <strong>{{ $restaurantsByLocation->count() }} results:</strong>
                            @endisset
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
                                                        <span class="featured text-white bg-info">
                                                            <span>{{ $data->category }}</span>
                                                        </span>
                                                        @if (is_array(json_decode($data->images)))
                                                            @php($Image = json_decode($data->images))
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $data->id) }}">
                                                                <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded">
                                                            </a>
                                                            @else
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $data->id) }}">
                                                                <img src="{{ asset('frontend/images/default_restaurant_image/cartoon-businessman-notebook-order-food-restaurant-vector-25076401.jpg') }}"
                                                                alt="restaurant images"
                                                                class="rounded">
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $data->id) }}">{{ $data->title }}</a></h3>
                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $data->overall_ratting ?? "wjsj" }}
                                                                <br>
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $data->city }}
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
                                                        <span class="featured text-white bg-info">
                                                            <span>{{ $restaurantData->category }}</span>
                                                        </span>
                                                        @if (is_array(json_decode($restaurantData->images)))
                                                            @php($Image = json_decode($restaurantData->images))
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $restaurantData->id) }}">
                                                                <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded">
                                                            </a>
                                                            @else
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $restaurantData->id) }}">
                                                                <img src="{{ asset('frontend/images/default_restaurant_image/cartoon-businessman-notebook-order-food-restaurant-vector-25076401.jpg') }}"
                                                                alt="restaurant images"
                                                                class="rounded">
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $restaurantData->id) }}">{{ $restaurantData->title }}</a></h3>
                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $restaurantData->overall_ratting }}
                                                                <br>
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $restaurantData->city }}
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
                                                        <span class="featured text-white bg-info">
                                                            <span>{{ $search->category }}</span>
                                                        </span>
                                                        @if (is_array(json_decode($search->images)))
                                                            @php($Image = json_decode($search->images))
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $search->id) }}">
                                                                <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded">
                                                            </a>
                                                            @else
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $search->id) }}">
                                                                <img src="{{ asset('frontend/images/default_restaurant_image/cartoon-businessman-notebook-order-food-restaurant-vector-25076401.jpg') }}"
                                                                alt="restaurant images"
                                                                class="rounded">
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $search->id) }}">{{ $search->title }}</a></h3>
                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $search->overall_ratting }}
                                                                <br>
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $search->city }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset

                                @isset($restaurantsByCategory)
                                    @foreach ($restaurantsByCategory as $searchCategory)
                                        <div class="result-list">
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <span class="featured text-white bg-info">
                                                            <span>{{ $searchCategory->category }}</span>
                                                        </span>
                                                        @if (is_array(json_decode($searchCategory->images)))
                                                            @php($Image = json_decode($searchCategory->images))
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $searchCategory->id) }}">
                                                                <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded">
                                                            </a>
                                                            @else
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $searchCategory->id) }}">
                                                                <img src="{{ asset('frontend/images/default_restaurant_image/cartoon-businessman-notebook-order-food-restaurant-vector-25076401.jpg') }}"
                                                                alt="restaurant images"
                                                                class="rounded">
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $searchCategory->id) }}">{{ $searchCategory->title }}</a></h3>
                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $searchCategory->overall_ratting }}
                                                                <br>
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $searchCategory->city }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset

                                @isset($restaurantsByLocation)
                                    @foreach ($restaurantsByLocation as $searchLocation)
                                        <div class="result-list">
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <span class="featured text-white bg-info">
                                                            <span>{{ $searchLocation->category }}</span>
                                                        </span>
                                                        @if (is_array(json_decode($searchLocation->images)))
                                                            @php($Image = json_decode($searchLocation->images))
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $searchLocation->id) }}">
                                                                <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded">
                                                            </a>
                                                            @else
                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', $searchLocation->id) }}">
                                                                <img src="{{ asset('frontend/images/default_restaurant_image/cartoon-businessman-notebook-order-food-restaurant-vector-25076401.jpg') }}"
                                                                alt="restaurant images"
                                                                class="rounded">
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $searchLocation->id) }}">{{ $searchLocation->title }}</a></h3>
                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $searchLocation->overall_ratting }}
                                                                <br>
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $searchLocation->city }}
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

                                    @isset($restaurantsByCategory)
                                        {{ $restaurantsByCategory->links() }}
                                    @endisset

                                    @isset($restaurantsByLocation)
                                        {{ $restaurantsByLocation->links() }}
                                    @endisset
                                </div>
                                <!-- Post Pagination -->
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
