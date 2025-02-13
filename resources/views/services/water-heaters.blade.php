@extends('app')

@section('title', 'Water Heater Plumbers | Lake Zurich')

@section('description', 'Water heater repair, installation, and replacement services near Lake Zurich, IL. We fix and install all types of conventional and tankless water heaters near Lake Zurich.')

@section('content')

    <div id="water_heater_page" class="interior_page">

        <a id="water-heater-service"></a>

        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">

                        <div class="small_banner">
                            <img class="small_banner_image"
                                 src="{{ asset('images/local-water-heater-plumbers-lake-zurich-il-bradford-white800x500.png')}}"
                                 title="Water Heater Plumbers in {{ $location['city_state'] }}"
                                 alt="Water Heater" />

                            <div class="inside_wrap">
                                <div class="text_table">
                                    <div class="text_cell">
                                        <p class="local_service">Best Local Water Heater Plumbers</p>
                                        <h1 class="column_heading main_heading">
                                            <u>Water Heaters</u>
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
                                            <span class="text_cell table_cell"><b>Commercial Water Heaters</b> <br>Repair and Installation near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Residential Water Heater</b> <br>Repair and Installation near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Water Heaters</b> <br>Inspection and Maintenance near Lake Zurich</span>
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
                            <p>Call us now to request water heater plumbing service around
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
                            <img class="content_image image200" src="{{ asset('images/local-plumbers-plumbing-services-around-lake-zurich-il-area-drop-leak300.png')}}"
                                 alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                            <h3 class="paragraph_heading">Water Heater Plumbing</h3>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/local-water-heater-plumber-lake-zurich-il600x375.jpg')}}"
                                 alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                        </div>
                        <br>
                        <p>
                            <b>Maximum Plumbing Inc.</b> from Lake Zurich IL provides water heater repair and installation services across the majority of northern suburbs of Chicago including Barrington, Buffalo Grove, Lake Zurich,
                            Long Grove, Palatine, Vernon Hills, and many more.
                        </p>
                        <br>

                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/logo-bradford-white-plumber-lake-zurich-il600x400.jpg')}}"
                                 alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                        </div>
                        <br>
                    </div> <!--end of .column-->

                    <div class="col-lg-8 column column_lg_right">

                        <h2 class="small_heading">Water heater plumbing services in Lake Zurich, IL and surrounding areas</h2>
                        <h3 class="column_heading">Trusted local water heater services</h3>

                        <h4 class="paragraph_heading">Water Heater Specialist | Lake Zurich</h4>
                        <p class="mb-4">
                            Maxim, the owner of the company, has built a strong reputation as a reliable and trustworthy plumber by consistently delivering high-quality
                            plumbing services to both residents and businesses. Among his areas of expertise are water heater installation and repair services.
                            Over the years, he has acquired extensive experience and knowledge in fixing and installing various types of water heaters in commercial and residential
                            properties located near Lake Zurich and other suburbs of Chicago.
                        </p>
                        <div class="image_combo mb-4 d-flex">
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/local-water-heater-installation-maxim-lake-zurich-il600x600.jpg')}}"
                                     alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                     title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/local-water-heater-plumber-thermostat-lake-zurich-il600x600.jpg')}}"
                                     alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                     title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                        </div>

                        <h4 class="paragraph_heading">Comprehensive Water Heater Services | Lake Zurich</h4>
                        <p>
                            Our team of experts specializes in seamless water heater installations, whether you're upgrading or replacing your unit.
                            In times of trouble, you can rely on Maximum Plumbing, Inc. for swift and effective water heater repairs, designed to minimize disruption to your daily life.
                        </p>
                        <p class="mb-4">
                            Additionally, our routine maintenance services are designed to extend the life of your water heater and enhance its efficiency, potentially reducing energy costs.
                            With our local expertise, certified technicians, use of top-quality parts, and a focus on punctuality, we are your trusted choice for all your water heater needs.
                            Reach out to Maximum Plumbing, Inc. today and experience our dedication to your comfort and satisfaction.
                        </p>
                        <br>
                        <div class="image_combo mb-4 d-flex">
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/best-local-plumber-water-heater-selection-installation-zurich-il700x700.jpg')}}"
                                     alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                     title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/best-local-plumber-water-heater-installation-zurich-il700x700.jpg')}}"
                                     alt="Best Local Water Heater Plumber in {{ $location['city_state'] }}"
                                     title="Best Local Water Heater Plumber in {{ $location['city_state'] }} area" />
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                        </div>
                        <h3 class="paragraph_heading">Water Heater Problems | When should you call a plumber?</h3>
                        <p class="list_heading">
                            You should always hire a professional plumber as soon as you experience any of the following problems with your water heater unit:
                        </p>

                        <ul class="list_regular">
                            <li>water doesn't get hot</li>
                            <li>water heater is leaking</li>
                            <li>unusual noises are coming from your water heater when it is operating</li>
                            <li>water heater doesn't produce enough hot water</li>
                            <li>rusty colored water comes out of your water heater unit</li>
                        </ul>
                        <p>
                            Above situations indicate serious problems with your water heater and they should be taken care of by a professional plumber in order to avoid any further damage to your heating unit or your plumbing system.   
                        </p>
                        <p>
                            <b>If you need a trusted and fully qualified local plumber to fix or install a water heater for you please call us at
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
