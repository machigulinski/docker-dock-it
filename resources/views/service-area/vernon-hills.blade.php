@extends('app')

@section('title', 'Local Plumbers | Vernon Hills')

@section('description', 'Local plumbers, plumbing services near Vernon Hills, IL. Trusted and reliable local plumber near Vernon Hills, IL.
Call now 847-393-3733.')

@section('content')

    <div id="vernon_hills_page" class="interior_page service_area_page">
        <a id="vernon_hills_plumber"></a>
        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">
                        <div class="small_banner">
                            <div class="inside_wrap">
                                <h1 class="column_heading main_heading">
                                    <u> Vernon Hills IL </u>Local Plumbers &bull; Clogged Drains &bull; Plumbing Services
                                </h1>
                                <p class="text-center">
                                    Do you need a trusted and qualified plumber near Vernon Hills, IL? <b>Maximum Plumbing</b> provides high-quality plumbing
                                    services across the entire Vernon Hills area.
                                </p>
                                <div class="action_lead_row area_row row grey">
                                    <div class="col-lg-6 column text_column">
                                        <div class="action_lead table_display">
                                            <div class="icon_cell table_cell">
                                                <img class="icon_image" src="{{ asset('images/local-plumber-service-house-plumbing-repairs150.jpg') }}"
                                                     title="Broken Pipes &amp; Leak Repairs | Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city_state'] }}" />
                                            </div>
                                            <div class="text_cell table_cell">
                                                <h3 class="service_heading"><span class="icon_cell"><i class="fas fa-check" aria-hidden="true"></i></span> <span>All Plumbing Repairs</span></h3>
                                                <p class="service_description">Broken pipes, faucet, sink, and toilet leak repairs near {{ $location['city'] }}</p>
                                            </div>
                                        </div>
                                        <div class="action_lead table_display">
                                            <div class="icon_cell table_cell">
                                                <img class="icon_image" src="{{ asset('images/local-water-heater-installation-maxim-lake-zurich-il600x600.jpg') }}"
                                                     title="Drain &amp; Main Line | Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city_state'] }}" />
                                            </div>
                                            <div class="text_cell table_cell">
                                                <h3 class="service_heading"><span class="icon_cell"><i class="fas fa-check" aria-hidden="true"></i></span> <span>Water Heater Services</span></h3>
                                                <p class="service_description">We provide water heater installation and repair services near {{ $location['city'] }}</p>
                                            </div>
                                        </div>
                                        <div class="action_lead table_display">
                                            <div class="icon_cell table_cell">
                                                <img class="icon_image" src="{{ asset('images/local-plumber-service-pump-sump-battery-backup-repair-max150.jpg') }}"
                                                     title="Drain &amp; Main Line | Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city_state'] }}" />
                                            </div>
                                            <div class="text_cell table_cell">
                                                <h3 class="service_heading"><span class="icon_cell"><i class="fas fa-check" aria-hidden="true"></i></span> <span>Sump Pump Installation</span></h3>
                                                <p class="service_description">Sump pump with battery backup installations near {{ $location['city'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 column text_column">
                                        <div class="action_lead table_display">
                                            <div class="icon_cell table_cell">
                                                <img class="icon_image" src="{{ asset('images/drain-main-line-rodding-max-plumber-bathroom-drain-lake-zurich-il700x700.jpg') }}"
                                                     title="Drain &amp; Main Line | Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city_state'] }}" />
                                            </div>
                                            <div class="text_cell table_cell">
                                                <h3 class="service_heading"><span class="icon_cell"><i class="fas fa-check" aria-hidden="true"></i></span> <span>Drain &amp; Main Line Rodding</span></h3>
                                                <p class="service_description">Drain and sewer main line rodding, drain clog removal services near {{ $location['city'] }}</p>
                                            </div>
                                        </div>
                                        <div class="action_lead table_display">
                                            <div class="icon_cell table_cell">
                                                <img class="icon_image" src="{{ asset('images/local-plumber-service-toilet-faucet-repair-and-installations150.jpg') }}"
                                                     title="Toilets &amp; Faucets | Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city'] }}" />
                                            </div>
                                            <div class="text_cell table_cell">
                                                <h3 class="service_heading"><span class="icon_cell"><i class="fas fa-check" aria-hidden="true"></i></span> <span>Toilets, Sinks, <span class="d-inline-block">&amp; Faucets</span></span></h3>
                                                <p class="service_description">Installations and repair of all types of toilets, sinks, faucets, and bathtubs in Vernon Hills</p>
                                            </div>
                                        </div>
                                        <div class="action_lead table_display">
                                            <div class="icon_cell table_cell">
                                                <img class="icon_image" src="{{ asset('images/local-plumber-service-garbage-disposal-installation-and-replacement150.jpg') }}"
                                                     title="Drain &amp; Main Line | Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city'] }}" />
                                            </div>
                                            <div class="text_cell table_cell">
                                                <h3 class="service_heading"><span class="icon_cell"><i class="fas fa-check" aria-hidden="true"></i></span> <span>Garbage Disposal Replacements</span></h3>
                                                <p class="service_description">Installations of quality kitchen garbage disposals near {{ $location['city'] }}</p>
                                            </div>
                                        </div>
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
                            <p>Call us now to request plumbing service in
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

        <section class="section_row second_section section_lt_grey">
            <div class="content_wrap">
                <div class="row">

                    <div class="col-lg-8 column column_lg_left">
                        <h2 class="small_heading">Best Local Plumbers | All Drain &amp; Plumbing Services | {{ $location['city_state'] }}</h2>
                        <h3 class="column_heading">Professional Local Plumbers | {{ $location['city_state'] }}</h3>
                        <p>
                            Our professional plumbers are just a phone call or message away, ready to solve your drain or plumbing issues.
                            We are heavily equipped with plumbing know-how, experience, and tools to help you with any plumbing project.
                        </p>

                        <div class="image_combo mb-4 d-flex">
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/professional-plumber-sink-vernon-hills-il700x700.jpg') }}"
                                     title="Local Residential Plumbers near {{ $location['city_state'] }}"
                                     alt="Residential Plumbers in {{ $location['city_state'] }}"/>
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/local-plumber-service-pump-sump-battery-backup-repair-max-vernon-hills-il700x700.jpg') }}"
                                     title="Local Residential Plumbers near {{ $location['city_state'] }}"
                                     alt="Residential Plumbers in {{ $location['city_state'] }}"/>
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                        </div>
                        <p>
                            If you need a professional local plumber near Vernon Hills, IL please call us at
                            <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}
                            </a>.
                        </p>
                    </div>

                    <div class="col-lg-4 column sidebar_right">
                        <x-review-slider class="reviewSlider" location="{{$location['city']}}" />

                        <div class="image_wrap semi_white">
                            <img class="content_image image200" src="{{ asset('images/local-plumbers-plumbing-services-around-lake-zurich-il-area-drop-leak300.png') }}"
                                 title="Drain &amp; Main Line Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city_state'] }}" />
                            <h3 class="paragraph_heading">Residential &amp; Commercial Plumbing</h3>
                        </div>
                    </div> <!--end of .column-->
                </div>
            </div>
        </section>

        <section class="section_row second_section section_white">
            <div class="content_wrap">
                <div class="row">

                    <div class="col-lg-8 column column_lg_left">
                        <h2 class="small_heading">Best Local Plumbers | All Drain &amp; Plumbing Services | {{ $location['city_state'] }}</h2>
                        <h3 class="column_heading">Residential &amp; Commercial Plumbers | {{ $location['city_state'] }}</h3>

                        <div class="text_wrap">
                            <p>
                                Our plumbers are available 24 hours and 7 days a week for any residential and commercial plumbing emergencies.
                                For any other, non-emergency plumbing inquiries around Vernon Hills, you can contact us during our regular service hours.
                            </p>
                            <p>
                                For your convenience, we provide multiple multiple ways you can contact us.
                            </p>
                            <br>
                            <h4 class="paragraph_heading">All Types of Plumbing Services | {{ $location['city_state'] }}</h4>
                            <p>
                                Maximum Plumbing, Inc. company offers a full range of residential and commercial plumbing services across the village of Vernon Hills
                                and the surrounding areas. Our skilled and certified plumbers can quickly handle installations of
                                all types of sump pumps, garbage disposals, faucets, water heater, or tackle any other plumbing project near Vernon Hills.
                            </p>

                            <br>
                            <h2 class="paragraph_heading text-center text-lg-start mb-4">
                                Are you looking for a trusted plumber near Vernon Hills, IL?
                            </h2>
                            <p class="button_wrap text-lg-start">
                                <a class="custom_button ms-lg-0" title="Local Water Heater Plumber in {{ $location['city_state'] }}" href="tel:1-{{ config('app.phone') }}">
                                    <span>CALL NOW</span>&nbsp;
                                    <span class="d-inline-block"><i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}</span>
                                </a>
                            </p>
                            <br>
                        </div>
                    </div>

                    <div class="col-lg-4 column sidebar_right">
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/local-plumber-residential-plumbing-services700x700.jpg') }}"
                                 title="Local Residential Plumbers near {{ $location['city_state'] }}"
                                 alt="Residential Plumbers in {{ $location['city_state'] }}"/>
                            <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                 alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                        </div>
                        <br>
                        <p>
                            <em>
                                If you need a professional local plumber near Barrington, IL please call us at
                                <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}
                                </a>.
                            </em>
                        </p>
                    </div> <!--end of .column-->
                </div>
            </div>
        </section>

        <section class="map_section section_row">
            <div class="row map_wrapper">
                <div class="col-sm-12 column">
                    <div class="map_container">
                        <iframe class="responsive_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47264.52818040799!2d-87.9981168800092!3d42.23510772389489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880f963828fedd4d%3A0x2c85a810cad8f653!2sVernon%20Hills%2C%20IL!5e0!3m2!1sen!2sus!4v1628303040558!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <x-contact-bar location="{{ $location['city_state'] }}"/>

    </div><!-- end of .page_content-->

@endsection
