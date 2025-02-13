@extends('app')

@section('title', 'Local Plumbers | Arlington Heights')

@section('description', 'Local plumber, professional plumbing services near Arlington Heights, IL.
Trusted and reliable local plumbers near Arlington Heights, IL. Call now 847-393-3733.')

@section('content')

    <div id="Arlington Heights_page" class="interior_page service_area_page">
        <a id="Arlington Heights-plumber"></a>

        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">
                        <div class="small_banner">
                            <div class="inside_wrap">
                                <h1 class="column_heading main_heading">
                                    <u> Arlington Heights IL </u>Local Plumbers &bull; Drain &amp; Plumbing Services
                                </h1>
                                <p class="text-center">
                                    Are you looking for a trusted local plumber near the Arlington Heights, IL area? Look no further! We provide professional plumbing services in Arlington Heights and all the surrounding areas.
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
                                                     title="Toilets &amp; Faucets | Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city_state'] }}" />
                                            </div>
                                            <div class="text_cell table_cell">
                                                <h3 class="service_heading"><span class="icon_cell"><i class="fas fa-check" aria-hidden="true"></i></span> <span>Toilets, Sinks, <span class="d-inline-block">&amp; Faucets</span></span></h3>
                                                <p class="service_description">Installations and repair of all types of toilets, sinks, faucets, and bathtubs in {{ $location['city'] }}</p>
                                            </div>
                                        </div>
                                        <div class="action_lead table_display">
                                            <div class="icon_cell table_cell">
                                                <img class="icon_image" src="{{ asset('images/local-plumber-service-garbage-disposal-installation-and-replacement150.jpg') }}"
                                                     title="Drain &amp; Main Line | Plumbers in {{ $location['city_state'] }}" alt="Local Plumbers in {{ $location['city_state'] }}" />
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
                                <u class="d-inline-block">{{ $location['city_state'] }}</u>
                            </p>
                            <div class="button_wrap">
                                <a class="custom_button" href="tel:{{ config('app.phone') }}">
                                    <span>CALL NOW</span> <span class="d-inline-block"><i class="fas fa-phone-alt" aria-hidden="true"></i>{{ config('app.phone') }}</span>
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
                        <h2 class="small_heading">Local Plumbers | All Drain &amp; Plumbing Services | {{ $location['city_state'] }}</h2>
                        <h3 class="column_heading">Quality Local Plumbers | {{ $location['city_state'] }}</h3>
                        <p>
                            <b>Maximum Plumbing, Inc.</b> provides all types of plumbing services in Arlington Heights and all the surrounding areas. Arlington Heights is the 13th most populous municipality
                            in Illinois, which explains the high demand for quality plumbing services in the area.
                        </p>
                        <p>
                            Call us at
                            <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}
                            </a>
                            now if you need a professional, trusted plumber near the Arlington Heights, IL area.
                        </p>
                        <br>
                        <div class="service_row">
                            <div class="row">
                                <div class="col-lg-5 column column_lg_left">
                                    <div class="image_wrap">
                                        <img class="content_image" src="{{ asset('images/local-plumber-residential-water-heater-installation-arlington-heights-il600x600.jpg') }}"
                                             title="Local Residential Plumbers near {{ $location['city_state'] }}"
                                             alt="Residential Plumbers in {{ $location['city_state'] }}"/>
                                        <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                             alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                                    </div>
                                    <br>
                                </div>
                                <div class="col-lg-7 column text_wrap">
                                    <h4 class="paragraph_heading">Residential Plumbing Services in {{ $location['city'] }}</h4>
                                    <p>
                                        Pipe leaks? Water heater problems? Kitchen drains are clogged?
                                    </p>
                                    <p>
                                        Our local plumbers in Arlington Heights can quickly solve any of your plumbing issues.
                                        No hidden charges, free project cost estimates upon arrival, and the highest quality plumbing service you could find in the area of Arlington Heights.
                                    </p>
                                    <p>
                                        Call us now at <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">
                                            <i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}
                                        </a> and we will help you!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="service_row">
                            <div class="row">
                                <div class="col-lg-5 column column_lg_left">
                                    <div class="image_wrap mb-4 mb-lg-0">
                                        <img class="content_image" src="{{ asset('images/local-plumber-commercial-plumbing-arlington-heights-il700x700.jpg') }}"
                                             title="Local Toilet, Sink &amp; Faucet Plumbers in {{ $location['city_state'] }}"
                                             alt="Local Plumbers in {{ $location['city_state'] }}"/>
                                        <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                             alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                                    </div>
                                </div>
                                <div class="col-lg-7 column">
                                    <h4 class="paragraph_heading">{{ $location['city'] }} Commercial Plumbing Services</h4>
                                    <p>
                                        Commercial plumbing jobs more often than not require additional manpower, tools, and know-how. Our plumbers are fully certified and have
                                        tremendous experience that allows them to handle any commercial plumbing job with ease.
                                    </p>
                                    <p>
                                        If you are a business owner who needs help from a qualified plumbing expert in the area of Arlington Heights you should contact us immediately.
                                        The quicker you have us handle your plumbing issues the sooner you can fully focus on your business.
                                    </p>
                                    <br>
                                </div>
                            </div>
                            <br>
                            <h2 class="paragraph_heading text-center">
                                Are you looking for a local plumber near the Arlington Heights, IL area?
                            </h2>
                            <p class="button_wrap text-center">
                                <a class="custom_button no_margin" title="Local Water Heater Plumber in {{ $location['city_state'] }}" href="tel:1-{{ config('app.phone') }}">
                                    <span>CALL NOW</span>&nbsp;
                                    <span class="d-inline-block"><i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}</span>
                                </a>
                            </p>
                            <br>
                        </div>
                    </div>

                    <div class="col-lg-4 column sidebar_right">
                        <x-review-slider class="reviewSlider" location="{{$location['city']}}" />
                        <div class="image_wrap semi_white">
                            <img class="content_image image200" src="{{ asset('images/local-plumbers-plumbing-services-around-lake-zurich-il-area-drop-leak300.png') }}"
                                 title="Drain &amp; Main Line Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                            <h3 class="paragraph_heading">Residential &amp; Commercial Plumbing</h3>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/local-plumber-residential-plumbing-services-arlington-heights-il700x700.jpg') }}"
                                 title="Local Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}"/>
                            <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                 alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                        </div>
                        <br>

                    </div> <!--end of .column-->
                </div>
            </div>
        </section>

        <section class="map_section section_row">
            <div class="row map_wrapper">
                <div class="col-sm-12 column">
                    <div class="map_container">
                        <iframe class="responsive_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63229.76593439734!2d-88.04625406327499!3d42.09568721677805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fba3bce5cfa37%3A0xd764707ce5fdcac3!2sArlington%20Heights%2C%20IL!5e0!3m2!1sen!2sus!4v1628439528074!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <x-contact-bar location="{{ $location['city_state'] }}"/>

    </div><!-- end of .page_content-->

@endsection
