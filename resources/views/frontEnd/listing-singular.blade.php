@extends('frontEnd.master')

@section('title', 'Restaurant Details')

@push('css')
{{--  --}}
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
                        <!-- About Slider Images -->
                        @foreach ($data->post_restaurant_meta as $meta_data)
                            @foreach (json_decode($meta_data->meta_value) as $images)
                                <div class="item" style="background-image: url({{ asset('storage/Restaurant/images/' . $images) }});"></div>
                            @endforeach
                        @endforeach
                        <!-- About Slider Images -->
                    </div>
                </div>
            </div>

        </section>
        <!-- Vendor Background End -->

        <!-- Vendor Profile Single Start -->
        <div class="vendor-profile-single">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-12 mb-0">
                        <div class="profile-single">
                            <h3>{{ $data->title }}</h3>
                            <p><i class="fa fa-map-marker"></i> {{ $data->city }} "{{ $data->address ?? "No Address" }}"</p>
                            <div class="reviews">
                                <span class="badge"><i class="fa fa-star"></i> {{ round($star_reviews, 1) }}</span>
                                out of {{ count($feedbacks) }} Reviews
                            </div><br>
                            <div class="recomendation-section">
                                @if (round($star_reviews, 1) > 3.5)
                                    <i class="fa fa-check-circle-o text-info" aria-hidden="true"></i>
                                    <span>Recomended</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-lg-flex justity-content-lg-between align-items-lg-center mt-lg-0 mt-4 p-0">

                        <div class="restaurant-availability col-lg-8 mb-sm-0">

                            @php
                                foreach (json_decode($data->availability) as $availability => $time) {

                                    if ($availability === "from") {
                                        $from = $time;
                                    }elseif ($availability === "to") {
                                        $to = $time;
                                    }
                                }

                                $open = \Carbon\Carbon::createFromFormat('H:i a', $from);
                                $close = \Carbon\Carbon::createFromFormat('H:i a', $to);

                                $checkAvailability = \Carbon\Carbon::now()->between($open, $close, true)
                            @endphp

                            {{ \Carbon\Carbon::now() }}

                            @if ($checkAvailability)
                                <span class="bg-success text-white py-1 px-2 rounded-pill text-capitalize">
                                    open
                                </span>
                                @else
                                <span class="bg-danger text-white py-1 px-2 rounded-pill text-capitalize">
                                    closed
                                </span>
                            @endif
                        </div>

                        <div class="share-and-location-section col-lg-4 mt-4">
                            <span class="dropdown hover_out">
                                <a class="btn btn-outline-white mb-2" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-share-alt"></i> Share
                                </a>

                                <span class="dropdown-menu">
                                    @foreach (json_decode($data->social_links) as $icons => $links)
                                        <a class="dropdown-item" target="_blank" href="{{ $links }}">
                                            <i class="fa fa-{{ $icons }}"></i>
                                            {{ $icons }}
                                        </a>
                                    @endforeach
                                </span>
                            </span>

                            <span class="hover_out">
                                <a href="https://www.google.com/maps/search/{{ $data->title }} {{ $data->city }}"
                                    target="_blank"
                                    class="btn btn-outline-white mb-2">
                                    <i class="fa fa-map-marker"></i> Location
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor Profile Single End -->

        <section class="wide-tb-90 mt-5 pt-0">
            <div class="container">
                <div class="row">

                    <!-- Vendor Single Content -->
                    <div class="col-lg-12 col-md-12">

                        <!-- Description -->
                        <div class="mb-5">
                            <a id="description" class="anchor-fake"></a>
                            <div class="description-header text-info">
                                <h2><i class="fa fa-file-text"></i> Who we are</h2>
                            </div>
                            <div class="description-body">
                                <p>{!! $data->description ?? "No Description" !!}</p>
                            </div>
                        </div>
                        <!-- Description -->

                        <!-- Reviews -->
                        <div class="">
                            <div class="feedbacks-header text-info d-md-flex justify-content-between align-items-center">
                                <h2><i class="fa fa-comments"></i> Feedbacks</h2>
                            </div>

                            <div class="overall-ratting mt-4">
                                <div class="no-gutters">
                                    <div class="col-md-auto">
                                        <h3 class="text-success text-center">
                                            <i class="fa fa-star-o"></i>
                                            Overall Ratting
                                        </h3>

                                        <div class="review-count">
                                            <span>{{ round($star_reviews, 1) }}</span>
                                            <small>out of 5.0</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="write-feedback-body">
                                <div class="write-feedback">
                                    <form id="feedback_form">
                                        @csrf

                                        <x-error/>
                                        <x-alert/>
                                    <!-- Leave a Reply -->
                                        <div class="row mt-4">
                                            <div class="col-md-12 mb-0">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="feedback" id="feedback_review" rows="4" placeholder="Write Your Feedback"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Post Feedback</button>
                                        </div>
                                        <!-- Leave a Reply -->
                                    </form>
                                </div>
                            </div>

                            <div class="card-shadow-body" id="appendFeedback">
                                <!-- Review Media -->
                                @foreach ($feedbacks as $feedback)
                                    <div class="reviews-media">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="heading-wrap no-gutters">
                                                    <div class="heading">
                                                        <div class="col pl-0">
                                                            <h4 class="mb-0">{{ $feedback->username }}</h4>
                                                        </div>
                                                        <div class="col-auto">
                                                            <small class="text-info">Reviewed on {{ $feedback->created_at->format('d-M-Y') }}</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p>{{ $feedback->feedback }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Reviews -->

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
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#feedback_form").submit(function (e) {
            e.preventDefault();

            let feedbackReview = $("#feedback_review").val();

            $.ajax({
                type: "POST",
                url: "{{ route('frontend.restaurant.singular.feedback', $data->id) }}",
                data: {feedback:feedbackReview},
                success: function (response) {

                    console.log(response.feedback.username);

                    $("#appendFeedback").append('<div class="reviews-media"><div class="media"><div class="media-body"><div class="heading-wrap no-gutters"><div class="heading"><div class="col pl-0"><h4 class="mb-0">'+response.feedback.username+'</h4></div><div class="col-auto"><small class="text-info">Reviewed on '+response.feedback.created_at+'</small></div></div></div><p>'+response.feedback.feedback+'</p></div></div></div>');
                },
                error: function (jqXHR, exeption) {
                    if (jqXHR.status === 409) {
                        swal.fire({
                            title: 'Already Reviewed',
                            text: "You connot provide more then 1 feedback.",
                            icon: 'info',
                        })
                    }

                    if (jqXHR.status === 422) {
                        swal.fire({
                            title: 'Field Empty',
                            text: "Feedback is required",
                            icon: 'error',
                        })
                    }

                    if (jqXHR.status === 401) {
                        swal.fire({
                            title: 'UnAuthorised',
                            text: "You have to login to provide feedback",
                            icon: 'info',
                            showCancelButton: true,
                            confirmButtonText: 'Login'
                        }).then(result => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('login') }}";
                            }
                        })
                    }
                }
            });

        });
    });
</script>
@endpush
