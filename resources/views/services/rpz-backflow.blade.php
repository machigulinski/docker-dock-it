@extends('app')

@section('title', 'RPZ Backflow Testing Lake Zurich')

@section('description', 'Professional RPZ Backflow testing in Lake Zurich, IL and nearby areas. We install and test RPZ assemblies near Lake Zurich.')

@section('content')

    <div id="rpz_backflow_page" class="interior_page">

        <a id="rpz-testing"></a>
        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">
                        <div class="small_banner pt-4">
                            <img class="small_banner_image"
                                 src="{{ asset('images/local-plumber-rpz-backflow-testing-lake-zurich-il450.png') }}"
                                 title="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}" alt="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}">

                            <div class="inside_wrap">
                                <div class="text_table">
                                    <div class="text_cell">
                                        <p class="local_service">Trusted Local Plumber</p>
                                        <h1 class="column_heading main_heading">
                                            <u>RPZ Backflow Testing</u>
                                            RPZ Valve Installation &amp; Inspection Services
                                        </h1>
                                    </div>
                                </div>
                                <div class="action_lead_row row">
                                    <div class="col-lg-3 column image_column">
                                        <div class="image_wrap">
                                            <img class="action_image" src="{{ asset('images/local-plumbers-plumbing-services-around-lake-zurich-il-area200.png') }}"
                                                 alt="Local Plumber" title="Local Water Heater Plumbers in {{ $location['city_state'] }} area" >
                                        </div>
                                    </div>
                                    <div class="col-lg-9 column text_column">
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Commercial RPZ Backflow Assembly</b> <br>Inspection &amp; Installation near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Residential RPZ Backflow Valves</b> <br>Inspection &amp; Installation near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Certified Cross Connection Control Inspector </b> <br>State Of Illinois</span>
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
                        <div class="call_us_now mb-4">
                            <p>
                                Call us now to request water heater plumbing service around
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
                        <p class="mb-5 p-3 border border-1 border-dark rounded-2 fw_500">
                            Failure to install or maintain an RPZ valve can lead to fines, water contamination, or disruption of service. This is where Maximum Plumbing comes in!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_row second_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-4 column sidebar_left mb-4 mb-lg-0">
                        <x-review-slider class="reviewSlider" location="{{$location['city']}}" />

                        <div class="image_wrap semi_white mb-4">
                            <img class="content_image image250" src="{{ asset('images/rpz-backflow-testing-maximum-plumber-lake-zurich-county-il300.jpg')}}"
                                 title="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}" alt="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}">
                            <h3 class="paragraph_heading">RPZ Backflow Testing</h3>
                        </div>
                        <p>
                            <strong class="fw_500">Maximum Plumbing Inc.</strong> from Lake Zurich IL provides RPZ Valve testing and installation services across the majority of northern suburbs of Chicago including Barrington, Buffalo Grove, Lake Zurich,
                            Long Grove, Palatine, Vernon Hills, and many more.
                        </p>
                    </div>

                    <div class="col-lg-8 column column_lg_right">
                        <h2 class="small_heading">Cross Connection Valve Installation &amp; Inspection Lake Zurich IL</h2>
                        <h3 class="column_heading">Certified <u>RPZ Backflow</u> Testing &amp; Installation <span class="d-inline-block">Lake Zurich IL</span></h3>
                        <p class="mb-4">
                            At Maximum Plumbing, we understand the importance of protecting your water supply from contamination.
                            With Max, certified as a Cross Connection Control Inspector and RPZ Backflow Inspector, we are proud to offer professional RPZ testing, installation, and repair services for residential, commercial, and industrial properties across Lake and Cook County, Illinois.
                        </p>

                        <h3 class="paragraph_heading">What is an RPZ Valve and Why Do You Need It?</h3>
                        <p class="mb-4">
                            An <strong class="fw_500">RPZ (Reduced Pressure Zone)</strong> valve is a critical device that prevents contaminants from entering your potable water system.
                            It works by creating a pressure barrier to block backflow—a situation where water flows in the opposite direction, potentially bringing harmful substances into your water supply. RPZ valves are often required for properties with irrigation systems, fire sprinklers, boilers, or any system connected to municipal water lines.
                        </p>
                        <div class="image_combo mb-4 d-flex">
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/local-plumber-rpz-backflow-inspection-lake-zurich-il600x600.jpg')}}"
                                     title="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}" alt="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}">
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     title="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}" alt="Professional RPZ Certified Plumber Near {{ $location['city_state'] }} Logo">
                            </div>
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/local-plumber-rpz-backflow-testing-lake-zurich-il600x600.jpg')}}"
                                     title="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}" alt="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}">
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     title="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}" alt="Professional RPZ Certified Plumber Near {{ $location['city_state'] }} Logo">
                            </div>
                        </div>

                        <h3 class="paragraph_heading">Comprehensive RPZ Services Lake Zurich &amp; Northern Illinois</h3>
                        <h4 class="paragraph_heading fs-5"><u>RPZ Testing</u></h4>
                        <p class="mb-2">
                            State regulations require annual RPZ valve testing to ensure compliance with local and Illinois plumbing codes. As a certified inspector, Max uses specialized equipment to perform accurate testing, ensuring your system is in optimal condition.
                        </p>
                        <p class="mb-2">
                            During the testing process, we:
                        </p>
                        <ul class="list_regular mb-3">
                            <li>Check for leaks, pressure imbalances, and damaged components</li>
                            <li>Provide detailed inspection reports for compliance</li>
                            <li>Assist with submitting necessary documentation to your municipality.</li>
                        </ul>

                        <h4 class="paragraph_heading fs-5"><u>RPZ Installation &amp; Replacement</u></h4>
                        <p>
                            Need a new RPZ valve installed? Whether you're upgrading an existing system or installing one for the first time, we ensure a seamless process.
                            If your backflow prevention system fails the test or experiences wear and tear, we offer expert repairs or complete replacements.
                        </p>
                        <ul class="list_regular mb-3">
                            <li>Evaluate your property's unique needs</li>
                            <li>Install the appropriate RPZ valve for your system</li>
                            <li>Ensure compliance with Illinois and local regulations.</li>
                        </ul>

                        <h5 class="paragraph_heading">Protect Your Water Supply Today</h5>
                        <p>
                            Don’t risk water contamination or non-compliance fines. Contact Maximum Plumbing today for expert RPZ backflow testing, installation, and repair services.
                            <strong class="fw_500">Call us at <a class="phone_link" title="Call Local RPZ Backflow Valve Inspector Near Lake Zurich, IL area" href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a>
                                to schedule your appointment today.</strong>
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
