@extends('frontEnd.master')

@section('title', 'Home')

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
                <h1>Highest Rating Restaurants</h1>
            </div>
            <div class="row">
                @foreach (getRankedRestaurants() as $top_restaurant)
                    <div class="col-lg-4 col-md-6">
                        <div class="wedding-listing">
                            <div class="img">
                                @if (is_array($top_restaurant->images))
                                    @php($Image = json_decode($top_restaurant->images))
                                    <a href="{{ route('frontend.singular.restaurant.listening.page', $top_restaurant->id) }}">
                                        <img src="{{ asset('storage/Restaurant/images/'.$Image[0]) }}" alt="restaurant images">
                                    </a>
                                    @elseif (!is_array($top_restaurant->images))
                                    <a href="{{ route('frontend.singular.restaurant.listening.page', $top_restaurant->id) }}">
                                        <img src="{{ asset('frontend/images/default_restaurant_image/cartoon-businessman-notebook-order-food-restaurant-vector-25076401.jpg') }}"
                                        alt="restaurant images">
                                    </a>
                                @endif
                                <div class="img-content">
                                    <div class="bottom">
                                        <a class="tags">
                                            {{ $top_restaurant->category }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="gap">
                                    <h3><a href="{{ route('frontend.singular.restaurant.listening.page', $top_restaurant->id) }}">{{ $top_restaurant->title }}</a></h3>
                                    <div><i class="fa fa-map-marker"></i> {{ $top_restaurant->city }}</div>
                                </div>
                                <div class="reviews text-center">
                                    <div class="rev">
                                            <i class="fa fa-star text-warning"></i>
                                        {{ $top_restaurant->overall_ratting }} reviews
                                            <i class="fa fa-star text-warning"></i>
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
            </div>
            <div class="owl-carousel owl-theme dots-black" id="slider-feedback">
                @php($feedbacks = App\Models\Customer\UsersFeedback::getFeedbacks())
                <!-- Customer Testimonials -->
                @foreach ($feedbacks as $feedback)
                    <div class="item">
                        <div class="customer-feedback-wrap">
                            <div class="content">
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                                {{ $feedback->feedback }}
                            </div>
                            <div class="name-wrap p-3">
                                @if (empty($feedback->user->avatar) || $feedback->user->avarar = null)
                                    <img style="width: 50px" src="{{ asset('frontend/images/avatar/user_icon-removebg-preview.png') }}" alt="avatar">
                                @elseif (!empty($feedback->user->avatar) || $feedback->user->avarar != null)
                                    <img style="width: 50px" src="{{ asset('storage/profile_img/'.$feedback->user->avatar) }}" alt="avatar">
                                @endif
                                <div class="text">
                                    <h3>{{ $feedback->username }}</h3>
                                </div>
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
