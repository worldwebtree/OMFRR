<section class="slider-wrap">
    <div class="owl-carousel owl-theme" id="slider-home">
        <!-- Home Slider Images -->
        <div class="item">
            <div class="home-slider">
                <img height="650" src="{{ asset('frontend/Styles/assets/images/restaurants/25459d1991189f8c04c6e63678f09336.gif') }}" alt="slider image 1">
            </div>
        </div>
        <!-- Home Slider Images -->
    </div>

    <div class="slider-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-12 mx-auto">
                    <h1>Find Review the Perfect Restaurants</h1>
                    <p class="lead txt-white text-center">Search over 360,000 restaurants with reviews, pricing, availability and more</p>
                    <form action="{{ route('frontend.restaurant-listening.search') }}" 
                        method="POST" 
                        class="restaurant-search-form">
                        @csrf

                        <x-error/>
                        <x-alert/>

                        <div class="slider-form rounded">
                            <div class="row no-gutters align-items-center">
                                <div class="col-12 col-md-5">
                                    <select class="form-light-select theme-combo home-select-1" required name="category">
                                        <option selected disabled>Choose Vendor Type</option>
                                        <option value="Dine In">Dine In</option>
                                        <option value="Take Away">Take Away</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-5 left-border">
                                    @php($location = App\Models\Admin\PostRestaurant::getRestaurantLocation())
                                    <select class="form-light-select theme-combo home-select-2" required name="location">
                                        <option selected disabled>Choose Location</option>
                                        @foreach ($location as $city)
                                            <option value="{{ $city->city }}">{{ $city->city }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-2">
                                    <button class="btn btn-default text-nowrap btn-block" type="submit">Search Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>