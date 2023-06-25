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
                            <p><i class="fa fa-map-marker"></i> {{ $data->city }} "{{ $data->address ?? "No Address" }}"</p>
                            <div class="reviews">
                                <span class="badge"><i class="fa fa-star"></i> {{ round($final_decimal_ratting, 1) }}</span> {{ $count_overall_reviews }} Reviews
                            </div><br>
                            <div class="recomendation-section">
                                @if ($recommend === "service")
                                    <i class="fa fa-check-circle-o text-info" aria-hidden="true"></i>
                                    <span>Recomended for Take Away</span>

                                    @elseif ($recommend === "food")
                                    <i class="fa fa-check-circle-o text-info" aria-hidden="true"></i>
                                    <span>Recommended for Dine In</span>

                                    @elseif ($recommend === "both")
                                    <i class="fa fa-check-circle-o text-info" aria-hidden="true"></i>
                                    <span>Recommended for Dine In & Take Away</span>

                                    @elseif ($recommend === "not ratted yet" && round($final_decimal_ratting, 1) == 5)
                                    <i class="fa fa-check-circle-o text-info" aria-hidden="true"></i>
                                    <span>Recommended for Dine In & Take Away</span>

                                    @elseif ($recommend === "not ratted yet")
                                    <span class="bg-info pt-2 pb-2 text-white pr-2 pl-2 rounded-pill">Not Recommended for any service yet</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 text-lg-right mt-lg-0 mt-4">
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
        <!-- Vendor Profile Single End -->

        <!-- Vendor Profile Navigation -->
        <div class="container vendor-nav-sticky">
            <div class="vendor-nav">
                <a href="#description"><i class="fa fa-file-text"></i> Description</a>
                <a href="#reviews"><i class="fa fa-star-half-full"></i> Reviews</a>
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
                                <p>{!! $data->description ?? "No Description" !!}</p>
                            </div>
                        </div>
                        <!-- Description -->

                        <!-- Reviews -->
                        <div class="card-shadow pos-rel">
                            <a id="reviews" class="anchor-fake"></a>
                            <div class="card-shadow-header d-md-flex justify-content-between align-items-center">
                                <h3><i class="fa fa-star-o"></i> Feedbacks</h3>
                            </div>
                            <div class="card-shadow-body border-bottom">
                                <div class="no-gutters">
                                    <div class="col-md-auto">
                                        <div class="review-count">
                                            <span>{{ round($final_decimal_ratting, 1) }}</span>
                                            <small>out of 5.0</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-shadow-body border-top">
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
                                                            <small class="text-info">Reviewed on {{ $feedback->created_at->format('d-m-y') }}</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p>{{ $feedback->feedback }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="card-shadow-body">
                                <div class="write-feedback">
                                    <form action="{{ route('frontend.restaurant.singular.feedback', $data->id) }}" method="POST">
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
                                            <button type="submit" class="btn btn-primary">Post Feedback</button>
                                        </div>
                                        <!-- Leave a Reply -->
                                    </form>
                                </div>
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
    //
</script>
@endpush
