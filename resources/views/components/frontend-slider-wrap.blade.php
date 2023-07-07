<section class="slider-wrap">
    <div class="slider-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="w-100 mx-auto col-lg-6">
                    <h1>Find Review the Perfect Restaurants</h1>

                    <p class="lead txt-white text-center">Search over {{ countRestaurants() }} restaurants with reviews and more</p>

                    <form action="{{ route('frontend.restaurant-listening.search') }}"
                        method="POST"
                        class="restaurant-search-form px-4">
                        @csrf

                        <x-error/>
                        <x-alert/>

                        <div class="slider-form rounded">
                            <div class="no-gutters align-items-center justify-content-around">
                                <div class="">
                                    <select id="custom-select-input" class="form-light-select theme-combo home-select-1 rounded-pill" required name="category">
                                        <option selected disabled>Choose Restaurant Type</option>
                                        <option value="Dine In">Dine In</option>
                                        <option value="Take Away">Take Away</option>
                                        <option value="Dine In & Take Away">Dine In & Take Away</option>
                                    </select>
                                </div>
                                <div class="my-3">
                                    <select class="form-light-select theme-combo home-select-2 rounded-pill" required name="location">
                                        <option selected disabled>Choose City</option>
                                        @foreach (getRestaurantLocation() as $index => $name)
                                            <option value="{{ $name }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="w-50 mx-auto">
                                    <button class="btn btn-default text-nowrap btn-block rounded-pill" type="submit">Search Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="slider-vector col-lg-6">
                    <img src="{{ asset('frontend/images/slider/OMFRR-Banner.png') }}" alt="">
                </div>
            </div>
        </div>

    </div>
</section>
