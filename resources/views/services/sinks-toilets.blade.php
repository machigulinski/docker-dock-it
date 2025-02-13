@extends('app')

@section('title', 'Toilets & Sinks | Lake Zurich')

@section('description', 'Local Lake Zurich plumber for any faucet, sink, bathtub or toilet repair and installation services.
Professional kitchen and bathroom plumbing around Lake Zurich.')

@section('content')

    <div id="toilet_sink_page" class="interior_page">

        <a id="toilet-sink-faucet-service"></a>
        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">
                        <div class="small_banner">
                            <div class="inside_wrap">
                                <div class="text_table">
                                    <div class="text_cell">
                                        <img class="small_banner_image"
                                             src="{{ asset('images/local-plumbers-toilets-bathtubs-sinks-faucets-lake-zurich-il-small-banner800.png') }}"
                                             title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                             alt="Local Plumbers in {{ $location['city_state'] }}"/>

                                        <p class="local_service">Best Local Plumbers</p>
                                        <h1 class="column_heading main_heading">
                                            <u>Toilets, Sinks,<br>Bathtubs &amp; Faucets</u>
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
                                            <span class="text_cell table_cell"><b>Bathroom &amp; Kitchen Sinks</b> <br>Installation &amp; Repair Services near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Toilets &amp; Bathtubs</b> <br>Installation &amp; Repair Services near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Sink &amp; Bathtub Faucets</b> <br>Installation &amp; Repair Services near Lake Zurich</span>
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
                                 title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                            <h3 class="paragraph_heading">Residential &amp; Commercial Plumbing</h3>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/best-local-plumber-commercial-residential-plumbing-zurich-il600x400.jpg') }}"
                                 title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/best-plumber-lake-zurich-il-moen-logo600.jpg') }}"
                                 title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/best-plumber-lake-zurich-il-kohler-logo600.jpg') }}"
                                 title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                        </div>
                        <br><br>
                    </div> <!--end of .column-->

                    <div class="col-lg-8 column column_lg_right">

                        <h2 class="small_heading">Professional Local Plumbers in Lake Zurich, IL and surrounding areas</h2>
                        <h3 class="column_heading">Residential &amp; Commercial Plumbing Services</h3>
                        <p>
                            <b>Maximum Plumbing, Inc.</b> provides residential and commercial plumbing services across all northern suburbs of Chicago including Arlington Heights, Barrington, Buffalo Grove,
                            Lake Zurich, Hoffman Estates and Vernon Hills to name a few. We install and repair all types of facets, bathtubs or sinks.
                        </p>
                        <br>
                        <div class="service_row">
                            <div class="row">
                                <div class="col-lg-5 column column_lg_left">
                                    <div class="image_wrap">
                                        <img class="content_image" src="{{ asset('images/best-plumber-sink-installation-lake-zurich-il600x600.jpg') }}"
                                             title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                             alt="Local Plumbers in {{ $location['city_state'] }}"/>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-lg-7 column text_wrap">

                                    <h2 class="paragraph_heading">Sink / Faucet Installation <span class="d-inline-block">&amp; Repair Services</span></h2>
                                    <p>
                                        Are you remodeling your bathroom or kitchen and need a trusted professional plumber to install new appliances for you?
                                        Is your sink faucet leaking?
                                    </p>
                                    <p>
                                        We install and fix all types of bathroom and kitchen facets and sinks around the Lake Zurich area.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="service_row">
                            <div class="row">
                                <div class="col-lg-5 order-lg-2 column column_lg_right">
                                    <div class="image_wrap">
                                        <img class="content_image" src="{{ asset('images/best-plumber-toilet-installation-lake-zurich-il600x600.jpg') }}"
                                             title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                             alt="Local Plumbers in {{ $location['city_state'] }}"/>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-lg-7 order-lg-1 column text_wrap">

                                    <h2 class="paragraph_heading">Toilet Installation <span class="d-inline-block">&amp; Repair Services</span></h2>
                                    <p>
                                        Do you have a leaky or wobbly toilet? Do you need a professional plumber to install the brand new toilet for you?
                                    </p>
                                    <p>
                                        Contact Maximum Plumbing, Inc. from Lake Zurich if you need a professional plumber to handle your toilet installation or repair project.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="service_row">

                            <div class="row">
                                <div class="col-lg-5 column column_lg_left">
                                    <div class="image_wrap">
                                        <img class="content_image" src="{{ asset('images/best-plumber-bath-tub-facuet-lake-zurich-il600x600.jpg') }}"
                                             title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                             alt="Local Plumbers in {{ $location['city_state'] }}"/>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-lg-7 column text_wrap">

                                    <h2 class="paragraph_heading"><span class="d-inline-block">Bathtub/ Faucet</span> Installation Services</h2>
                                    <p>
                                        We provide the complete bathtub installation and repair services in across all northern suburbs of Chicago. Regardless if you have a problem with a bathtub faucet, shower valve or drain we will be
                                        able to solve your problem fast and at an affordable rate.
                                    </p>

                                    <p>
                                        <b>If you need a fast and fully qualified local plumber for any toilet, sink or faucet installation projects please call us at
                                            <a class="phone_link" title="Call Local Water Heater Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">1-{{ config('app.phone') }}</a>.</b>
                                    </p>
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
