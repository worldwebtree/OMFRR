@extends('frontEnd.master')

@section('title', 'About')

@push('css')
{{--  --}}
@endpush

@section('content')
    <main id="body-content">

        <!-- About Intro Start -->
        <section class="wide-tb-70 about-page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 mx-auto">
                        <div class="text-center about-content">
                            <h1 class="fw-7">Who we are</h1>
                            <p>
                                {!! $about !!}
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
                    <div class="col-md-6 col-lg-4 my-md-2">
                        <div class="icon-box-style-2">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <h4>Trsuted Restaurants</h4 >
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <!-- Why Choose Icons -->
                    <div class="col-md-6 col-lg-4 my-md-2">
                        <div class="icon-box-style-2">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h4>Real Users</h4 >
                        </div>
                    </div>
                    <!-- Why Choose Icons -->

                    <div class="col-md-6 col-lg-4 my-md-2">
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
                </div>
                <div class="owl-carousel owl-theme dots-black" id="slider-feedback">
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
                </div>
            </div>
        </section>
        <!-- Customer Feedback End -->
    </main>
@endsection


@push('js')
{{--  --}}
@endpush
