@extends('frontEnd.master')

@section('title')
Contact
@endsection

@push('css')

@endpush

@section('content')
<main id="body-content">

    <!-- Contact Details Start -->
    <section>
        @php($contact = App\Models\Admin\ContactUs::getContactInformation())

        @foreach ($contact as $data)
            <div class="container">
                <div class="row mt-4">
                    <!-- Contact Details Wrap -->
                    <div class="col-md-4">
                        <div class="contact-details-wrap">
                            <i class="weddingdir_support"></i>
                            <h3 class="txt-primary">Customer Support</h3>
                            <p class="my-4">Call our 24-hour helpline.</p>
                            <div>Phone number: <a href="javascript:" class="btn-link btn-link-default">{{ $data->phone }}</a></div>
                            <div>Email Us: <a class="btn-link btn-link-primary">{{ $data->customer_support_email }}</a> </div>
                        </div>
                    </div>
                    <!-- Contact Details Wrap -->

                    <!-- Contact Details Wrap -->
                    <div class="col-md-4">
                        <div class="contact-details-wrap">
                            <i class="weddingdir_location"></i>
                            <h3 class="txt-primary">Our Address</h3>
                            <p class="my-4">Our offices are located in..</p>
                            <div>Address: {{ $data->address }}</div>
                        </div>
                    </div>
                    <!-- Contact Details Wrap -->

                    <!-- Contact Details Wrap -->
                    <div class="col-md-4">
                        <div class="contact-details-wrap">
                            <i class="weddingdir_mail"></i>
                            <h3 class="txt-primary">Other Enquiries</h3>
                            <p class="my-4">Please contact us at the email below for all other inquiries.</p>
                            <div>Email Us: <a class="btn-link btn-link-primary">{{ $data->email }}</a> </div>
                        </div>
                    </div>
                    <!-- Contact Details Wrap -->
                </div>
            </div>
        @endforeach
    </section>


    <section class="wide-tb-90">
        <div class="container">

            <div class="row">
                <div class="col-lg-7 mx-auto col-md-8">
                    <div class="text-center">
                        <h3 class="txt-default fw-7">If Any Query Feel Free To Contact Us</h3>
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
                                    <button type="submit" class="btn btn-primary">Send Message</button>
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

@endpush
