@extends('frontEnd.master')

@section('title', 'Contact')

@push('css')
{{--  --}}
@endpush

@section('content')
<main id="body-content">
    <section class="wide-tb-90">
        <div class="container">

            <div class="row">
                <div class="col-lg-7 mx-auto col-md-8">
                    <div class="text-center">
                        <h2 class="txt-white fw-7">If Any Query Feel Free To Contact Us</h2>
                        <form action="{{ route('frontend.contact.store') }}" method="POST">
                            @csrf

                            <x-error/>
                            <x-alert/>

                            <div class="row mt-5">
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-dark" required name="firstName" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-dark" required name="lastName" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-dark" required name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-dark" required name="mobile" placeholder="Mobile No.">
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-0">
                                    <div class="form-group">
                                        <textarea class="form-control form-dark" required name="message" placeholder="Your Message" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-default rounded-pill">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Contact Details End -->
</main>
@endsection


@push('js')
{{--  --}}
@endpush
