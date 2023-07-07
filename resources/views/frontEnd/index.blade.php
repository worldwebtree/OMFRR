@extends('frontEnd.master')

@section('title', 'Home')

@push('css')

@endpush

@section('content')
<!-- slider wrap -->
<x-frontend-slider-wrap/>

<main id="body-content">
    <!-- Top Wedding Listings Start -->
    <section class="wide-tb-120">
        <div class="container">
            <div class="section-title text-center">
                <h1>Highest Rating Restaurants</h1>
            </div>
            <div class="row">
                @foreach (getRankedRestaurants() as $top_restaurant)
                    <div class="col-lg-4 col-md-6">
                        <div class="wedding-listing">
                            <div class="img">
                                @foreach ($top_restaurant->post_restaurant_meta as $restaurant_meta)

                                    @php($Image = json_decode($restaurant_meta->meta_value))

                                    <img class="w-100" height="200" src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images">

                                @endforeach
                            </div>
                            <div class="content">
                                <a class="tags">
                                    {{ $top_restaurant->category }}
                                </a>

                                <div class="gap">
                                    <h3>
                                        <a href="{{ route('frontend.singular.restaurant.listening.page', [$top_restaurant->id, $top_restaurant->title]) }}">
                                            {{ $top_restaurant->title }}
                                        </a>
                                    </h3>
                                    <div class="location-icon">
                                        <i class="fa fa-map-marker"></i>
                                        {{ $top_restaurant->city }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                        <p class="lead text-white">Have any queries!</p>
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
            </div>
            <div class="owl-carousel owl-theme dots-black" id="slider-feedback">
                <!-- Customer Testimonials -->
                @foreach (getFeedbacks() as $feedback)
                    <div class="item">
                        <div class="card text-center bg-light">
                            <i class="fa fa-comments text-info fa-5x"></i>
                            <div class="card-body">
                                <h4 class="card-title">{{ $feedback->username }}</h4>
                                <p class="card-text">{{ $feedback->feedback }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Customer Testimonials -->
            </div>
        </div>
    </section>
    <!-- Customer Feedback End -->

</main>
@endsection


@push('js')

@endpush
