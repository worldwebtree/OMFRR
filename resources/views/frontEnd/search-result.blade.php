@extends('frontEnd.master')

@section('title', 'Restaurants Listening')

@push('css')
{{--  --}}
@endpush

@section('content')
    <!--  Search Result Header Start -->
    <section class="search-result-header">
        <div class="container">
            <div class="row">
                <div class="w-100 mx-auto my-5" style="padding: 0 15px">
                    <h1 class="text-capitalize text-center">find by name and city</h1>

                    <p class="lead text-white text-center">Search over {{ countRestaurants() }} Restaurants with reviews and more</p>

                    <form action="{{ route('frontend.restaurant-listening.searchByName') }}"
                        method="POST"
                        class="restaurant_search_form_with_name px-4">
                        @csrf

                        <x-error/>
                        <x-alert/>

                        <div class="row no-gutters align-items-center justify-content-around">
                            <div class="col-12 col-md-4">
                                <select id="custom-select-input" class="form-light-select theme-combo home-select-1" required name="restaurant_name">
                                    <option selected disabled>Choose Restaurant</option>
                                    @foreach (getRestaurants() as $titles)
                                        <option value="{{ $titles->title }}">{{ $titles->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <select class="form-light-select theme-combo home-select-2" required name="restaurant_city">
                                    <option selected disabled>Choose City</option>
                                    @foreach (getRestaurantLocation() as $index => $name)
                                        <option value="{{ $name }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-2">
                                <button class="btn px-0 btn-default text-nowrap btn-block rounded-pill" type="submit">Search Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--  Search Result Header End -->

    <main id="body-content">
        <section class="wide-tb-50 restaurant-listening-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Sidebar Primary Start -->
                        <div class="sidebar-primary">

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
                                                @foreach (getRestaurantLocation() as $index => $name)
                                                    <li>
                                                        <a href="{{ route('frontend.restaurant-listening.search.by.location', $name) }}">
                                                            {{ $name }}
                                                        </a>
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

                    </div>
                    <div class="col-md-8">
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
                                                        @foreach ($data->post_restaurant_meta as $meta_data)
                                                            @php($Image = json_decode($meta_data->meta_value))

                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', [$data->id, $data->title]) }}">
                                                                <img height="150" src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded w-100">
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3>
                                                                <a href="{{ route('frontend.singular.restaurant.listening.page', [$data->id, $data->title]) }}">
                                                                    {{ $data->title }}
                                                                </a>
                                                            </h3>

                                                            <span class="featured bg-info">
                                                                <span>{{ $data->category }}</span>
                                                            </span>

                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $data->reviews ?? "wjsj" }}
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
                                                        @foreach ($restaurantData->post_restaurant_meta as $restaurantMetaData)
                                                            @php($Image = json_decode($restaurantMetaData->meta_value))

                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', [$restaurantData->id, $restaurantData->title]) }}">
                                                                <img height="150" src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded w-100">
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3>
                                                                <a href="{{ route('frontend.singular.restaurant.listening.page', [$restaurantData->id, $restaurantData->title]) }}">
                                                                    {{ $restaurantData->title }}
                                                                </a>
                                                            </h3>

                                                            <span class="featured bg-info">
                                                                <span>{{ $restaurantData->category }}</span>
                                                            </span>

                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $restaurantData->reviews }}
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
                                                        @foreach ($search->post_restaurant_meta as $search_meta)
                                                            @php($Image = json_decode($search_meta->meta_value))

                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', [$search->id, $search->title]) }}">
                                                                <img height="150" src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded w-100">
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3>
                                                                <a href="{{ route('frontend.singular.restaurant.listening.page', [$search->id, $search->title]) }}">
                                                                    {{ $search->title }}
                                                                </a>
                                                            </h3>

                                                            <span class="featured bg-info">
                                                                <span>{{ $search->category }}</span>
                                                            </span>

                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $search->reviews }}
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
                                                        @foreach ($searchCategory->post_restaurant_meta as $searchCategoryMeta)
                                                            @php($Image = json_decode($searchCategoryMeta->meta_value))

                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', [$searchCategory->id, $searchCategory->title]) }}">
                                                                <img height="150" src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded w-100">
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3><a href="{{ route('frontend.singular.restaurant.listening.page', [$searchCategory->id, $searchCategory->title]) }}">{{ $searchCategory->title }}</a></h3>

                                                            <span class="featured bg-info">
                                                                <span>{{ $searchCategory->category }}</span>
                                                            </span>

                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $searchCategory->reviews }}
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
                                                        @foreach ($searchLocation->post_restaurant_meta as $searchLocationMeta)
                                                            @php($Image = json_decode($searchLocationMeta->meta_value))

                                                            <a href="{{ route('frontend.singular.restaurant.listening.page', [$searchLocation->id, $searchLocation->title]) }}">
                                                                <img height="150" src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images" class="rounded w-100">
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="content">
                                                        <div class="head">
                                                            <h3>
                                                                <a href="{{ route('frontend.singular.restaurant.listening.page', [$searchLocation->id, $searchLocation->title]) }}">
                                                                    {{ $searchLocation->title }}
                                                                </a>
                                                            </h3>

                                                            <span class="featured bg-info">
                                                                <span>{{ $searchLocation->category }}</span>
                                                            </span>

                                                            <div class="rating">
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i> {{ $searchLocation->reviews }}
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
{{--  --}}
@endpush
