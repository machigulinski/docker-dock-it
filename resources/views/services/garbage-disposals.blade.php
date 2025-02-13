@extends('app')

@section('title', 'Garbage Disposals | Lake Zurich, IL')

@section('description', 'Local plumber provides sink garbage repair services near Lake Zurich, IL. Fast and affordable garbage disposal replacement
around Lake Zurich. Call now 847-393-3733.')

@section('content')

    <div id="garbage_disposal_page" class="interior_page">

        <a id="garbage-disposal-installation-service"></a>
        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">
                        <div class="small_banner">
                            <img class="small_banner_image"
                                 src="{{ asset('images/local-plumber-garbage-disposal-installation-lake-zurich-il-700.png') }}"
                                 title="Water Heater Plumbers in {{ $location['city_state'] }}"
                                 alt="Water Heater" />

                            <div class="inside_wrap">
                                <div class="text_table">
                                    <div class="text_cell">
                                        <p class="local_service">Best Local Water Heater Plumbers</p>
                                        <h1 class="column_heading main_heading">
                                            <u>Garbage Disposals</u>
                                            Installation &amp; Repair Services
                                        </h1>
                                    </div>
                                </div>

                                <div class="action_lead_row row">
                                    <div class="col-lg-3 column image_column">
                                        <div class="image_wrap">
                                            <img class="action_image" src="{{ asset('images/local-plumbers-plumbing-services-around-lake-zurich-il-area200.png') }}"
                                                 alt="Local Plumber" title="Local Water Heater Plumbers in {{ $location['city_state'] }} area" />
                                        </div>
                                    </div>
                                    <div class="col-lg-9 column text_column">
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Residential Garbage Disposals</b> <br>Installation Services near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Commercial Grade Garbage Disposals</b> <br>Installation Services near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Quality Garbage Disposals</b> <br>Best Brands and Models near Lake Zurich</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 column">
                        <div class="contact_form_wrap bg_dark me-lg-0">
                            <p class="form_heading text-center text-uppercase fs-5 mb-1">Request Plumbing Service</p>
                            <x-contact-form button="blue"/>
                        </div>

                        <div class="call_us_now">
                            <p>Call us now to request garbage disposal service around
                                <u class="d-inline-block">{{ $location['city_state'] }}</u></p>

                            <div class="button_wrap">
                                <a class="custom_button" href="tel:{{ config('app.phone') }}">
                                    <span>CALL NOW</span>&nbsp;
                                    <span class="d-inline-block"><i class="fas fa-phone-alt" aria-hidden="true"></i>{{ config('app.phone') }}</span>
                                </a>
                            </div>
                            <p>100% Customer Satisfaction Guaranteed!</p>
                        </div>
                    </div> <!--end of .column-->
                </div>
            </div>
        </section>

        <section class="section_row second_section">
            <div class="content_wrap">

                <div class="row">
                    <div class="col-lg-4 column sidebar_left">
                        <x-review-slider class="reviewSlider" location="{{$location['city']}}" />

                        <div class="image_wrap semi_white">
                            <img class="content_image image200" src="{{ asset('images/local-plumbers-plumbing-services-around-lake-zurich-il-area-drop-leak300.png') }}"
                                 alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                            <h3 class="paragraph_heading">Garbage Disposal Installation</h3>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/best-plumber-garbage-disposal-badger-lake-zurich-il600x400.jpg') }}"
                                 alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                        </div>
                        <br>
                        <p>
                            We provide and install the best quality residential and commercial garbage disposal products made by the industry-leading brands.
                        </p>
                        <br>
                        <div id="insink_logo_wrap" class="image_wrap logo_wrap">
                            <img class="content_image" src="{{ asset('images/insinkerator-garbage-disposal-logo-local-plumber-lake-zurich-il700x467.jpg') }}"
                                 alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                        </div>
                        <br>
                    </div> <!--end of .column-->

                    <div class="col-lg-8 column column_lg_right">

                        <h2 class="small_heading">Professional Local Plumbers in Lake Zurich, IL and surrounding areas</h2>
                        <h3 class="column_heading">Professional Garbage Disposal Installations</h3>

                        <p>
                            <b>Maximum Plumbing, Inc.</b> provides residential and commercial garbage disposal installations across all northern suburbs of Chicago.
                        </p>
                        <p>
                            Our solid work and quality plumbing service has gained a lot of loyal clients around places like
                            Arlington Heights, Barrington, Buffalo Grove, Lake Zurich, Hoffman Estates and Vernon Hills to name a few.
                        </p>

                        <div class="image_combo mb-4 d-flex">
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/best-plumber-garbage-disposal-badger-sink-lake-zurich-il700x700.jpg') }}"
                                     alt="Best Local Sump Pump Plumber in {{ $location['city_state'] }}"
                                     title="Best Local Sump Pump Plumber in {{ $location['city_state'] }} area" />
                            </div>
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/best-plumber-garbage-disposal-badger-lake-zurich-il700x700.jpg') }}"
                                     alt="Best Local Sump Pump Plumber in {{ $location['city_state'] }}"
                                     title="Best Local Sump Pump Plumber in {{ $location['city_state'] }} area" />
                            </div>
                        </div>
                        <h3 class="paragraph_heading">We will install your garbage disposal in no time</h3>
                        <p>
                            Our garbage disposal installation services are fast, solid and affordable for any pocket. Call us or use the form above to schedule your appointment for
                            a garbage disposal installation.
                        </p>
                        <br>

                        <h3 class="paragraph_heading">Benefits of garbage disposals</h3>
                        <p>
                            A garbage disposal will save time and bring a lot of convenience to your daily life esp.
                            if you prepare a lot of meals at home for yourself and your family.
                        </p>

                        <p class="list_heading">
                            There are many great benefits of having a garbage disposal unit installed in your kitchen sink. 
                        </p>

                        <ul class="list_regular">
                            <li>a properly functioning garbage disposal prevents drainpipe clogs</li>
                            <li>a garbage disposal saves time while washing dishes and dealing with food waste</li>
                            <li>a garbage disposal unit will reduce unpleasant odors in any kitchen.</li>
                        </ul>
                        <br>
                        <p>
                            <b>If you need a fast and fully qualified local plumber to install or replace a garbage disposal unit for you please call us at
                                <a class="phone_link" title="Call Local Water Heater Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">1-{{ config('app.phone') }}</a>.</b>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="map_section section_row">
            <div class="row map_wrapper">
                <div class="col-sm-12 column">
                    <div class="map_container">
                        <iframe class="responsive_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79525.13077034686!2d-88.07903917714661!3d42.206528550161515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fa261e28b5491%3A0x68c9371127538342!2sMaximum%20Plumbing%20inc.!5e0!3m2!1sen!2sus!4v1581630691182!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>

        <x-contact-bar location="{{ $location['city_state'] }}"/>

    </div><!-- end of .page_content-->

@endsection
