@extends('frontEnd.master')

@push('css')

@endpush

@section('content')
<main id="body-content">

    <!-- Google Map Start -->
    <section class="map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
    </section>
    <!-- Google Map End -->

    <!-- Contact Details Start -->
    <section>
        <div class="container">
            <div class="row contact-broken">
                <!-- Contact Details Wrap -->
                <div class="col-md-4">
                    <div class="contact-details-wrap">
                        <i class="weddingdir_support"></i>
                        <h3 class="txt-primary">Customer Support</h3>
                        <p class="my-4">Call our 24-hour helpline.</p>
                        <div>Phone number: <a href="javascript:" class="btn-link btn-link-default">+800-123-4567</a></div>
                        <div>Email Us: <a href="mailto:info@weddingdir.com" class="btn-link btn-link-primary">info@weddingdir.com</a> </div>
                    </div>
                </div>
                <!-- Contact Details Wrap -->

                <!-- Contact Details Wrap -->
                <div class="col-md-4">
                    <div class="contact-details-wrap">
                        <i class="weddingdir_location"></i>
                        <h3 class="txt-primary">Our Address</h3>
                        <p class="my-4">Our offices are located in the Georgia.</p>
                        <div>Address: 4998 Elk Creek Road <br>Canton, GA 30114</div>
                    </div>
                </div>
                <!-- Contact Details Wrap -->

                <!-- Contact Details Wrap -->
                <div class="col-md-4">
                    <div class="contact-details-wrap">
                        <i class="weddingdir_mail"></i>
                        <h3 class="txt-primary">Other Enquiries</h3>
                        <p class="my-4">Please contact us at the email below for all other inquiries.</p>
                        <div>Email Us: <a href="mailto:enquiry@weddingdir.com" class="btn-link btn-link-primary">enquiry@weddingdir.com</a> </div>
                    </div>
                </div>
                <!-- Contact Details Wrap -->
            </div>
        </div>
    </section>


    <section class="wide-tb-90">
        <div class="container">

            <div class="row">
                <div class="col-lg-7 mx-auto col-md-8">
                    <div class="text-center">
                        <h3 class="txt-default fw-7">Feel Free To Contact Us</h3>
                        <p>Excepteur sint occaecat cupidatat non proident sunt</p>
                        <form action="https://wporganic.com/html/weddingdir/form-action.php" method="get">

                            <input type="hidden" name="subject" value="Contact Form" />

                            <div class="row mt-5">
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-dark" name="First Name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-dark" name="Last Name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-dark" name="Email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-dark" name="Contact Number" placeholder="Mobile No.">
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-0">
                                    <div class="form-group">
                                        <textarea class="form-control form-dark" name="Message" placeholder="Your Message" rows="3"></textarea>
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