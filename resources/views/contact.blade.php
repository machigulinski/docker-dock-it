@extends('app')

@section('title', 'Contact Plumbers | Lake Zurich')

@section('description', 'Contact reliable local plumbers from Lake Zurich, IL. 24/7 Emergency Plumbing services across northwestern suburbs of Chicago. Call now 847-393-3733.')

@section('content')

    <div id="contact_page" class="interior_page">
        <section class="section_row pt-2">
            <div class="content_wrap">
                <h1 class="section_heading">Contact Local Plumbers | Lake Zurich</h1>

                <div class="row py-3 mb-3">
                    <div class="col-lg-8 column column_lg_left mb-5">
                        <a id="send-message"></a>
                        <h2 class="column_heading">Send us a message</h2>
                        <p>Please, contact us with any questions about our plumbing services, prices or availability.</p>
                        <x-contact-form button="blue"/>
                    </div>

                    <div class="col-lg-4 column sidebar">
                        <div id="contact_info_wrap">
                            <p class="column_heading">Contact Info</p>
                            <h2 class="paragraph_heading fs-5 mb-3">Maximum Plumbing, Inc.</h2>
                            <p><b><i class="fas fa-map-marker-alt"></i>Office Location</b></p>
                            <a href="https://www.google.com/maps/place/Maximum+Plumbing+inc./@42.2065286,-88.0790392,12z/data=!4m8!1m2!2m1!1smaximum+plumbing+inc!3m4!1s0x880fa261e28b5491:0x68c9371127538342!8m2!3d42.204194!4d-88.051055" target="_blank" class="address">
                                23474 N Garden Ln,<br />Lake Zurich, IL 60047
                            </a>
                            <hr />
                            <p class="phone_link"><a href="tel:>{{ config('app.phone') }}"><i class="fas fa-phone-alt"></i>{{ config('app.phone') }}</a></p>
                            <hr />
                            <p><b><i class="fas fa-clock"></i>Business Hours</b></p>
                            <ul id="business_hours_list">
                                <li class="business_hours"><span class="days">Monday</span><span class="hours">24 hours</span></li>
                                <li class="business_hours"><span class="days">Tuesday</span><span class="hours">24 hours</span></li>
                                <li class="business_hours"><span class="days">Wednesday</span><span class="hours">24 hours</span></li>
                                <li class="business_hours"><span class="days">Thursday</span><span class="hours">24 hours</span></li>
                                <li class="business_hours"><span class="days">Friday</span><span class="hours">24 hours</span></li>
                                <li class="business_hours"><span class="days">Saturday</span><span class="hours">24 hours</span></li>
                                <li class="business_hours"><span class="days">Sunday</span><span class="hours">24 hours</span></li>
                            </ul>
                            <p><b>24/7 Emergency Calls (No Extra Fees)</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--end of .row -->

        <section class="map_section section_row">
            <div class="row map_wrapper">
                <div class="col-sm-12 column">
                    <div class="map_container">
                        <iframe class="responsive_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79525.13077034686!2d-88.07903917714661!3d42.206528550161515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fa261e28b5491%3A0x68c9371127538342!2sMaximum%20Plumbing%20inc.!5e0!3m2!1sen!2sus!4v1581630691182!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
