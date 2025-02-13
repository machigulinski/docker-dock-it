@extends('app')

@section('title', 'Sump Pump Plumbers | Lake Zurich')

@section('description', 'Local sump pump plumber near Lake Zurich, IL. We provide professional sump pump and battery backup installation services around Lake Zurich. Call 847-393-3733.')

@section('content')

    <div id="sump_pump_page" class="interior_page">

        <a id="sump-pump-installation-service"></a>

        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">

                        <div class="small_banner">
                            <img class="small_banner_image mb-0"
                                 src="{{ asset('images/local-plumber-sump-pump-installation-lake-zurich-il640.png') }}"
                                 title="Sump Pump Plumbers in {{ $location['city_state'] }}"
                                 alt="Sump Pump" />

                            <div class="inside_wrap">
                                <div class="text_table">
                                    <div class="text_cell">
                                        <p class="local_service">Best Local Sump Pump Plumbers</p>
                                        <h1 class="column_heading main_heading">
                                            <u>Sump Pumps</u>
                                            Installation &amp; Repair Services
                                        </h1>
                                    </div>
                                </div>

                                <div class="action_lead_row row">
                                    <div class="col-lg-3 column image_column">
                                        <div class="image_wrap">
                                            <img class="action_image" src="{{ asset('images/local-plumbers-plumbing-services-around-lake-zurich-il-area200.png') }}"
                                                 alt="Local Plumber" title="Local Sump Pump Plumbers in {{ $location['city_state'] }} area" />
                                        </div>
                                    </div>
                                    <div class="col-lg-9 column text_column">
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Residential Sump Pumps</b> <br>Installation &amp; Repair Services near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Commercial Sump Pumps</b> <br>Installation &amp; Repair  Services near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Most Reliable Sump Pump Battery Back-Ups</b> <br>Sump Pump Plumbers near Lake Zurich</span>
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
                            <p>Call us now to request Sump Pump installation service around
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
                                 alt="Best Local Sump Pump Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Sump Pump Plumber in {{ $location['city_state'] }} area" />
                            <h3 class="paragraph_heading">Sump Pump Installations</h3>
                        </div>
                        <br>
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/best-plumber-sump-pump-installation-battery-backup-lake-zurich-il600x300.jpg') }}"
                                 alt="Best Local Sump Pump Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Sump Pump Plumber in {{ $location['city_state'] }} area" />
                        </div>
                        <br>
                        <p>
                            Maxim, the owner of <b>Maximum Plumbing Inc.</b> from Lake Zurich IL, has been providing sump pump installation services across the majority of northern suburbs of Chicago for well over a decade.
                        </p>
                        <br>
                        <div id="zoeller_logo_wrap" class="image_wrap logo_wrap">
                            <img class="content_image" src="{{ asset('images/zoeller-sump-pump-logo-local-plumber-lake-zurich-il700x467.jpg') }}"
                                 alt="Best Local Sump Pump Plumber in {{ $location['city_state'] }}"
                                 title="Best Local Sump Pump Plumber in {{ $location['city_state'] }} area" />
                        </div>
                        <br>
                    </div> <!--end of .column-->

                    <div class="col-lg-8 column column_lg_right">
                        <h2 class="small_heading">Sump Pump and Backup System Installation services in the Lake Zurich, IL area</h2>
                        <h3 class="column_heading">Professional Sump Pump Installers | Trusted Plumbers</h3>

                        <h3 class="paragraph_heading">Local Sump Pump Installation Services</h3>
                        <p>
                            Sump pumps are devices that are installed at the lowest point of the basement floor in a so-called sump pump dug pit. This small but very important addition to your house will keep your basement safe from flooding.
                            Every house in the midwest, esp. around places like Lake Zurich, IL should have a sump pump regardless if it has flooded before or not.
                        </p>
                        <p>
                            There are many benefits of adding a properly functioning sump pump to your property. Besides keeping your basement dry, free of mold or mildew it also adds value to your home and plays a big role
                            in keeping your house steady by stabilizing the soil underneath it.
                        </p>

                        <div class="image_combo mb-4 d-flex">
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/rusty-sump-pump-replacement-local-plumber-lake-zurich-il600x600.jpg') }}"
                                     alt="Best Local Sump Pump Plumber in {{ $location['city_state'] }}"
                                     title="Best Local Sump Pump Plumber in {{ $location['city_state'] }} area" />
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                            <div class="image_wrap w-50">
                                <img class="content_image" src="{{ asset('images/best-plumber-sump-pump-installation-maxim-lake-zurich-il600x600.jpg') }}"
                                     alt="Best Local Sump Pump Plumber in {{ $location['city_state'] }}"
                                     title="Best Local Sump Pump Plumber in {{ $location['city_state'] }} area" />
                                <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                     alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                            </div>
                        </div>
                        <h4 class="paragraph_heading text-capitalize">Do I need a sump pump for my house?</h4>
                        <p>
                            According to the long term statistics almost all buildings around places like Barrington, Buffalo Grove, Hoffman Estates, Lake Zurich, Long Grove,
                            Palatine or Vernon Hills to name a few are in high risk of water flooding and should be equipped with sufficient sump pumps and battery back up systems.
                        </p>

                        <p class="list_heading">
                            We highly recommend installing a reliable sump pump at every house located in the midwest esp. if any of following is true:
                        </p>
                        <ul class="list_regular">
                            <li>your house had problems with water flooding before</li>
                            <li>the area, where you live, gets a significant amount of rain and snow</li>
                            <li>you have a finished basement made into a livable space</li>
                            <li>your house is built on poorly draining soil that is prompt to flooding</li>
                        </ul>

                        <p>
                            <b>If you need a trusted and fully qualified local plumber to fix or install a sump pump for you please call us at
                                <a class="phone_link" title="Call Local Sump Pump Plumber in Lake Zurich, IL are" href="tel:1-{{ config('app.phone') }}">1-{{ config('app.phone') }}</a>.</b>
                        </p>
                        <br>
                        <h4 class="paragraph_heading text-capitalize">The most common sump pump problems</h4>
                        <p>
                            Sump pumps, just like almost any device in your house, do not last forever. The average life expectancy of a quality sump pump is about 10 years. There are usually early signs of
                            your sump pump breaking down which you should not ignore.
                        </p>
                        <p class="list_heading">
                            Call a reliable local plumber from the Lake Zurich area as soon as you experience any of the following scenarios:
                        </p>

                        <ul class="list_regular">
                            <li>a sump pump is making strange loud noise</li>
                            <li>a sump pump keeps running but there is no water in sump pump pit</li>
                            <li>a sump pump is running too much</li>
                            <li>a sump pump has no power.</li>
                        </ul>
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
