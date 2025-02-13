@extends('app')

@section('title', 'Local Plumbers | Buffalo Grove')

@section('description', 'Local plumbers, plumbing services near Buffalo Grove, IL. Trusted and reliable local plumber near Buffalo Grove, IL.
Call now 847-393-3733.')

@section('content')

    <div id="buffalo_grove_page" class="interior_page service_area_page">

        <a id="buffalo_grove_plumber"></a>
        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">

                        <div class="small_banner">
                            <div class="inside_wrap">
                                <h1 class="column_heading main_heading">
                                    <u> Buffalo Grove IL </u>Local Plumbers &bull; Clogged Drains &bull; Plumbing Services
                                </h1>
                                <p class="text-center">
                                    Are you looking for a trusted plumber around Buffalo Grove, IL? We provide high-quality plumbing
                                    services across the entire Buffalo Grove area.
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
                                                <p class="service_description">Installations and repair of all types of toilets, sinks, faucets, and bathtubs in Buffalo Grove</p>
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
                            <p class="form_heading text-center text-uppercase fs-4 mb-1">Request Plumbing Service</p>
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
                        <h2 class="small_heading">Residential &amp; Commercial Plumbers | {{ $location['city_state'] }}</h2>
                        <h3 class="column_heading">Need a professional plumber near {{ $location['city'] }}?</h3>
                        <p>
                            The village of Buffalo Grove, IL is located approximately 30 miles away from downtown Chicago.
                            It is a very affluent area among the group of northwestern suburbs of Chicago.
                            <b>Maximum Plumbing, Inc.</b> offers all types of professional residential and commercial drain and plumbing services across the entire area of Buffalo Grove, IL.
                        </p>

                        <div class="image_combo mb-4 d-flex">
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/local-plumber-residential-plumbing-services700x700.jpg') }}"
                                     title="Local Residential Plumbers near {{ $location['city_state'] }}"
                                     alt="Residential Plumbers in {{ $location['city_state'] }}"/>
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/local-plumber-under-sink-plumbing-buffalo-grove-il700x700.jpg') }}"
                                     title="Local Residential Plumbers near {{ $location['city_state'] }}"
                                     alt="Residential Plumbers in {{ $location['city_state'] }}"/>
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                        </div>
                        <p>
                            Our local plumbers in Buffalo Grove are just a phone call away. Call us now at
                            <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}
                            </a>
                            so we can solve all your plumbing issues.
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
                        <h2 class="small_heading">Professional Plumbers | All Drain &amp; Plumbing Services | {{ $location['city_state'] }}</h2>
                        <h3 class="column_heading">Trusted Local Plumbers | {{ $location['city_state'] }}</h3>

                        <div class="text_wrap">
                            <p>
                                We have many years of professional experience providing all types of plumbing services to business and property owners around Buffalo Grove, IL.
                                Over the time, our company has become a recognized and trustworthy brand, not only in Buffalo Grove but also around the majority of northwestern suburbs of Chicago.
                            </p>
                            <br>
                            <h4 class="paragraph_heading">Residential Plumbing Services | {{ $location['city_state'] }}</h4>
                            <p>
                                Plumbing or drain issues can cause a lot of frustration among homeowners in the Buffalo Grove, IL area. Some plumbing emergencies can happen suddenly
                                when you expect them the least, while some problems appear after many obvious warning signs.
                            </p>
                            <p>
                                Our Buffalo Grove plumbers are ready to help you with any plumbing emergency or project. We offer free cost estimates and 100% customer satisfaction.
                            </p>
                            <br>

                            <h4 class="paragraph_heading">Commercial Plumbing Services | {{ $location['city_state'] }}</h4>
                            <p>
                                We are ready to tackle any commercial plumbing project regardless of its type or size. Simply, give us a call at
                                <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}</a> you are a business owner who needs a reliable professional
                                plumber around Buffalo Grove, IL.
                            </p>
                            <p>
                                We will make sure all your plumbing issues are properly resolved as quickly as possible
                                because we truly understand that your time is precious.
                            </p>
                            <br>
                        </div>
                    </div>

                    <div class="col-lg-4 column align_left_large">
                        <h2 class="paragraph_heading align_left_large">
                            Are you looking for a trusted plumber near Buffalo Grove, IL?
                        </h2>
                        <p>
                            Click the button below and our expert plumbers from the Buffalo Grove area will assist you shortly.
                        </p>
                        <p class="button_wrap text-center">
                            <a class="custom_button no_margin" title="Local Water Heater Plumber in {{ $location['city_state'] }}" href="tel:1-{{ config('app.phone') }}">
                                <span>CALL NOW</span>&nbsp;
                                <span class="d-inline-block"><i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}</span>
                            </a>
                        </p>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/local-plumber-service-faucet-installation-buffalo-grove-il700x700.jpg') }}"
                                 title="Local Residential Plumbers near {{ $location['city_state'] }}"
                                 alt="Residential Plumbers in {{ $location['city_state'] }}"/>
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
                        <iframe class="responsive_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47313.42075915765!2d-87.9873425305441!3d42.16978212508438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fbc0db73e17df%3A0x93b86f7936dde6d5!2sBuffalo%20Grove%2C%20IL!5e0!3m2!1sen!2sus!4v1628370534155!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>
        </section>
        <x-contact-bar location="{{ $location['city_state'] }}"/>

    </div><!-- end of .page_content-->

@endsection