@extends('app')

@section('title', 'Drain & Sewer | Lake Zurich')

@section('description', 'Best local plumbers for drain, sewer, and main line rodding near Lake Zurich, IL.
Professional plumbing and drain unclogging services around Lake Zurich. Call now 847-393-3733.')

@section('content')

    <div id="drain_cleaning_page" class="interior_page">

        <a id="drain-mainline-rodding"></a>
        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">
                        <div class="small_banner">
                            <div class="inside_wrap">
                                <div class="text_table">
                                    <div class="text_cell">
                                        <img class="small_banner_image"
                                             src="{{ asset('images/local-plumbers-drain-main-line-rodding-camera-lake-zurich-il-small-banner700.png') }}"
                                             title="Drain &amp; Main Line | Plumbers in {{ $location['city_state'] }}"
                                             alt="Local Plumbers in {{ $location['city_state'] }}"/>

                                        <p class="local_service">Best Local Plumbers | {{ $location['city_state'] }}</p>
                                        <h1 class="column_heading main_heading">
                                            <u>Drains, Sewer &amp; Main Line</u>
                                            Rodding | Unclogging | Camera Inspection
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
                                            <span class="text_cell table_cell"><b>Sewer / Main Line </b> <br>Camera Inspection &amp; Rodding near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Bathroom &amp; Kitchen Drains</b> <br>Unclogging Services near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Drain Clogs Removal</b> <br>w/ Camera Inspection near Lake Zurich</span>
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
                            <p>Call us now to request drain rodding service
                                <u class="d-inline-block">{{ $location['city_state'] }}</u>
                            </p>

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
                                 title="Drain &amp; Main Line Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                            <h3 class="paragraph_heading">Residential &amp; Commercial Plumbing</h3>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image grey_back" src="{{ asset('images/local-plumbers-drain-main-line-rodding-lake-zurich-il-small-banner600x400.png') }}"
                                 title="Drain &amp; Main Line Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/drain-main-line-rodding-plumber-rigid-logo-lake-zurich-il600.jpg') }}"
                                 title="Drain &amp; Main Line Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                        </div>
                        <br>
                    </div> <!--end of .column-->

                    <div class="col-lg-8 column column_lg_right">
                        <h2 class="small_heading">Local Plumbers | Drain &amp; Main line Rodding Lake Zurich, IL</h2>
                        <h3 class="column_heading">Drain &amp; Main line rodding | Drain Camera Inspection</h3>
                        <p>
                            <b>Maximum Plumbing, Inc.</b> provides residential and commercial drain rodding services across all northern suburbs of Chicago like Arlington Heights, Barrington,
                            Buffalo Grove, Lake Zurich, Hoffman Estates, or Vernon Hills.
                        </p>
                        <p>
                            We have professional rodding equipment, experience, and know-how to remove any clogs from your drains or sever lines.
                        </p>
                        <br>
                        <div class="service_row">
                            <div class="row">
                                <div class="col-lg-5 column column_lg_left">
                                    <div class="image_wrap">
                                        <img class="content_image" src="{{ asset('images/drain-main-line-rodding-plumber-bathroom-drain-lake-zurich-il700x700.jpg') }}"
                                             title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                             alt="Local Plumbers in {{ $location['city_state'] }}"/>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-lg-7 column text_wrap">
                                    <h2 class="paragraph_heading">Bathroom &amp; Kitchen Drains <span class="d-inline-block">Unclogging Services</span> | {{ $location['city_state'] }}</h2>
                                    <p>
                                        Our Lake Zurich plumbers don't recommend using any Drano products to resolve drainage issues in your house.
                                        Drano can severely damage residential pipes and cause leaks. It is also a very strong chemical that can cause burns it gets into contact with your skin.
                                    </p>
                                    <p>
                                        If you noticed that water in your kitchen sink or bathtub is not draining fast enough
                                        <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">call</a>
                                        our trusted plumber from Lake Zurich, IL at <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">{{ config('app.phone') }}</a>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="service_row">
                            <div class="row">
                                <div class="col-lg-5 order-lg-2 column column_lg_right">
                                    <div class="image_wrap">
                                        <img class="content_image" src="{{ asset('images/drain-main-line-rodding-max-plumber-bathroom-drain-lake-zurich-il700x700.jpg') }}"
                                             title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                             alt="Local Plumbers in {{ $location['city_state'] }}"/>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-lg-7 order-lg-1 column text_wrap">

                                    <h2 class="paragraph_heading">Main Line Rodding Services | <span class="d-inline-block">{{ $location['city_state'] }}</span></h2>
                                    <p>
                                        There may be numerous reasons for your mainline or sewer blockage. Our Lake Zurich plumbers have experience and professional equipment to locate and remove any obstructions in your drainage and sewer systems.
                                    </p>
                                    <br>
                                    <h2 class="paragraph_heading align_left_large mb-4">
                                        Do you need a professional plumber to unclog your drain around Lake Zurich?
                                    </h2>
                                    <p class="button_wrap align_left_large">
                                        <a class="custom_button no_margin" title="Local Water Heater Plumber in {{ $location['city_state'] }}" href="tel:1-{{ config('app.phone') }}">
                                            Clogged Drain? Call Now!
                                        </a>
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <br>
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
