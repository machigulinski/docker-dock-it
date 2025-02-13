@extends('app')

@section('title', '24/7 Local Plumbers Lake Zurich')

@section('description', 'Trusted local plumbers provide plumbing and drain services near Lake Zurich.
Water heater, sump pump, and sink garbage disposal services int the Lake Zurich area.')

@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="first-slide slide">
                    <div class="row banner_row">
                        <div class="col-lg-6 d-lg-flex align-items-center">
                            <div id="banner_text">
                                <h1 class="section_heading text-lg-start mb-2">
                                    Lake Zurich Plumbers
                                </h1>
                                <h2 class="text-center text-lg-start fs-3 fw_500 fw-bolder mb-5 mb-lg-0">
                                    Plumbing and drain cleaning services within 30&nbsp;miles from <span class="d-inline-block">Lake Zurich, IL</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-flex align-items-center justify-content-lg-end">
                            <div class="contact_form_wrap bg_dark me-lg-0">
                                <p class="form_heading text-center text-uppercase fs-4 mb-1">Request Plumbing Service</p>
                                <x-contact-form button="blue"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="homepage">
        <section id="home_cta_row" class="section_row">
            <div class="content_wrap">
                <h2 class="small_heading">
                    Licensed Local Plumbers near <span class="d-inline-block">Lake Zurich, IL</span> and surrounding areas
                </h2>
                <h3 class="section_heading mb-4">
                    Professional Plumbing Services Near Lake Zurich&nbsp;IL
                </h3>
                <h4 class="paragraph_heading text-center mb-4">Do You Need A Trusted Professional Plumber near Lake Zurich&nbsp;IL?</h4>
                <div class="d-lg-flex col-lg-10 col-xl-8 mx-auto mb-4 align-items-center justify-content-center">
                    <div class="d-flex justify-content-center mb-3 mb-lg-0 me-lg-4">
                        <div><link rel="stylesheet" href="https://cdn6.localdatacdn.com/badges/bestprosintown/css/badge-v3.2.css?v=91029"><link rel="stylesheet" href="https://cdn6.localdatacdn.com/badges/bestprosintown/css/badge-v3.2.css?v=97572"><div id="circle_v3" style="width:calc(294px * 1);height:calc(227px * 1);" tabindex="0"><div class="rb_flex rb_top"><div class="arc-heading "><svg height="160px" viewBox="0 0 150 140" width="160px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M 30 80 a 50 50 0 1 1 110 0" id="heading-arc"></path></defs><text class="arc-heading__heading " fill="#000" text-anchor="middle"><textPath startOffset="50%" xlink:href="#heading-arc">Recommended</textPath></text></svg></div><div id="circletype_v3_brand_name"><a target="_blank" href='https://www.bestprosintown.com/il/lake-zurich/maximum-plumbing-inc-/' class="ahref_emprty_area" style="font-weight:700;font-size:17.56017620526025px;"><svg width="235" height="62"><defs><path id="textPath" d="M15,40 A110,31 0 0 1 220 40"></path></defs><text text-anchor="middle"><textPath startOffset="50%" xlink:href="#textPath">Maximum Plumbing inc.</textPath></text></svg></a></div><div class="arc-heading arc-heading__bottom"><svg height="160px" viewBox="0 0 150 150" width="160px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M 12 60 a 55 55 0 0 0 140 0" id="subheading-arc" stroke="red"></path></defs><text class="arc-heading__subheading" fill="#000" text-anchor="middle"><textPath startOffset="50%" xlink:href="#subheading-arc"><a target="_blank" href='https://www.bestprosintown.com'>BestProsInTown</a></textPath></text></svg></div></div></div></div>
                    </div>
                    <div class="text-start mb-4">
                        <p class="text-start mb-2">
                            <strong class="fw_500">Maximum Plumbing Inc.</strong> is your trusted local plumbing service provider in Lake Zurich and nearby areas, including Barrington, Palatine, Buffalo Grove, Hoffman Estates, Arlington Heights, Vernon Hills, Northbrook, and Highland Park.
                            Our skilled team offers top-quality plumbing solutions, from routine maintenance to complex repairs and installations.
                        </p>
                        <p class="mb-0">
                            Count on us for reliable service and a commitment to exceeding your expectations.
                            Contact Maximum Plumbing Inc. today for all your plumbing needs in Lake Zurich and its surroundings.
                        </p>
                    </div>
                </div>

                <div id="home_cta_wrap">
                    <div class="home_cta column">
                        <a class="cta_links" href="/local-plumbers-sump-pump-and-battery-backup-systems" title="Local Plumber Sump Pump Installation in {{ $location['city_state'] }}">
                            <div class="image_wrap">
                                <img class="icon_image" src="/images/sump-pump-installation-lake-zurich-il-icon200.png"
                                     title="Local Plumber Sump Pump Installation in {{ $location['city_state'] }}"  alt="Sump Pump Icon">
                            </div>
                            <div class="text_wrap">
                                <p class="cta_heading">Sump Pumps</p>
                                <h2 class="small_heading">Local Sump Pump Plumber near <span class="d-inline-block">Lake Zurich<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></h2>
                                <p class="cta_text">
                                    Our plumbers provide professional sump pump installations around the Lake Zurich area.
                                    We fix and install sump pumps with battery backup systems near Lake Zurich.
                                    Keep your house and basement dry, call our Lake Zurich sump pump experts today!
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="home_cta column">
                        <a class="cta_links" href="/local-plumbers-garbage-disposal-installations" title="Local Plumber Garbage Disposal Installation in {{ $location['city_state'] }}">
                            <div class="image_wrap">
                                <img class="icon_image" src="/images/garbage-disposal-installation-lake-zurich-il-icon200.png"
                                     title="Local Plumber Garbage Disposal Installation in {{ $location['city_state'] }}"  alt="Garbage Disposal Icon">
                            </div>
                            <div class="text_wrap">
                                <p class="cta_heading">Garbage Disposals</p>
                                <h2 class="small_heading">Local Residential Plumber near <span class="d-inline-block">Lake Zurich<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></h2>
                                <p class="cta_text">
                                    Broken garbage disposal? No problem! Our Lake Zurich plumbers can resolve it quickly.
                                    We provide fast and affordable sink garbage disposal repair and installation services near Lake Zurich.
                                    Call our plumbers in Lake Zurich if you need a garbage disposal replacement!
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="home_cta column">
                        <a class="cta_links" href="/local-plumbers-drain-and-mainline-rodding" title="Local Plumber Sink, Toilet, and Bathtubs in {{ $location['city_state'] }}">
                            <div class="image_wrap">
                                <img class="icon_image" src="/images/drain-manline-rodding-plumber-lake-zurich-il-icon200.png"
                                     title="Local Plumber| Drain and Main Line Rodding near {{ $location['city_state'] }}"  alt="Rotter Icon">
                            </div>
                            <div class="text_wrap">
                                <p class="cta_heading">Drain &amp; Main Line</p>
                                <h2 class="small_heading">Local Drain Rodding near <span class="d-inline-block">Lake Zurich<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></h2>
                                <p class="cta_text">
                                    Our Lake Zurich plumbers can quickly unclog any drain, or sewer main line.
                                    Drain rodding and sewer cleaning with camera inspection service near Lake Zurich.
                                    Call our drain experts in Lake Zurich before the clogged drains cause damage to your drainage system!
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="home_cta column">
                        <a class="cta_links" href="/local-plumbers-water-heater-repairs-and-installations" title="Local Plumber Water Heater Installation in {{ $location['city_state'] }}">
                            <div class="image_wrap">
                                <img class="icon_image" src="/images/water-heater-installation-lake-zurich-il-icon200.png"
                                     title="Local Plumber Water Heater Installation in {{ $location['city_state'] }}"  alt="Water Heater Icon" />
                            </div>
                            <div class="text_wrap">
                                <p class="cta_heading">Water Heaters</p>
                                <h2 class="small_heading">Local Water Heater Plumber near <span class="d-inline-block">Lake Zurich<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></h2>
                                <p class="cta_text">
                                    The most professional and trusted water heater plumbers around the Lake Zurich area.
                                    We service conventional and tankless water heaters near Lake Zurich, IL.
                                    Call our plumbers in Lake Zurich if you have problems with your water heater.
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="home_cta column">
                        <a class="cta_links" href="/local-plumbers-toilet-sink-faucet-installations-and-repairs" title="Local Plumber Sink, Toilet, and Bathtubs in {{ $location['city_state'] }}">
                            <div class="image_wrap">
                                <img class="icon_image" src="/images/sink-repair-andr-installation-lake-zurich-il-icon200.png"
                                     title="Local Plumber Sink, Toilet, and Bathtubs in {{ $location['city_state'] }}"  alt="Sink Icon">
                            </div>
                            <div class="text_wrap">
                                <p class="cta_heading">Sinks &amp; Toilets</p>
                                <h2 class="small_heading">Local Kitchen/ Bathroom Plumber near <span class="d-inline-block">Lake Zurich<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></h2>
                                <p class="cta_text">
                                    Do you need a professional house plumber around Lake Zurich, IL?
                                    Our skilled plumbers can install sinks, toilets, and bathtubs or fix the most annoying leaks.
                                    Professional kitchen and bathroom plumbers near Lake Zurich, IL.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <p class="button_wrap text-center mb-0">
                    <a class="custom_button" title="Local Water Heater Plumber in {{ $location['city_state'] }}" href="tel:1-{{ config('app.phone') }}">
                        Need A Plumber? Call Now!
                    </a>
                </p>
            </div>
        </section>

        <section id="home_sump_pump_section" class="section_row section_dark" >
            <div class="content_wrap">
                <div class="row d-lg-flex justify-content-lg-start align-items-center">
                    <div class="column text_panel_dark col-lg-10">
                        <h2 class="small_heading text-center text-lg-start">
                            Trusted Sump Pump Plumbers near the <span class="d-inline-block">Lake Zurich</span> area
                        </h2>
                        <h3 class="section_heading text-center text-lg-start">
                            Sump Pumps<br>&amp; Battery Backup Systems
                        </h3>
                        <h4 class="paragraph_heading text-white">Get A Sump Pump Today! Invest in Your Property's Safety</h4>
                        <p class="mb-3">
                            Keep your basement safe and dry with a well-functioning sump pump.
                            Your home is more than just a place to live - it's an investment in your future. Protecting this investment should always be a top priority.
                        </p>

                        <p class="mb-4">
                            That's why, in the picturesque Lake Zurich region, having a reliable sump pump is not just a convenience, it's a necessity. Heavy rains and unpredictable weather patterns can lead to basement flooding, causing extensive damage to your property and possessions.
                            Our mission is to provide you with peace of mind by ensuring your basement remains dry and secure, even in the face of adverse weather conditions.
                        </p>
                        <h4 class="paragraph_heading text-white">Contact Us Today for Your Sump Pump Solution</h4>
                        <p class="mb-3">
                            Don't wait until the next heavy rain or unexpected basement flood occurs.
                            Protect your home and your peace of mind by reaching out to us today.
                        </p>
                        <p class="mb-4">
                            Call us at <a class="phone_link" title="Call Local Sump Pump Plumber near Lake Zurich, IL" href="tel:1-{{ config('app.phone') }}"><i class="fas fa-phone-alt" aria-hidden="true"></i> {{ config('app.phone') }}</a>
                            to schedule a consultation with our dedicated team.
                            We'll assess your needs, answer any questions you may have, and provide you with a tailored solution to ensure your basement remains dry, safe, and secure.
                            Your home deserves the best, and we're here to deliver it.
                        </p>

                        <br>
                        <p class="button_wrap text-lg-start">
                            <a class="custom_button ms-lg-0" title="Local Plumber Sump Pump Installation in  {{ $location['city_state'] }}" href="/local-plumbers-sump-pump-and-battery-backup-systems">
                                Sump Pump Service&nbsp; <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="rpz_backflow_section" class="section_row">
            <div class="content_wrap_xl">
                <div class="row">
                    <div class="col-12 order-first mb-3">
                        <h2 class="small_heading text-center">
                            Professional RPZ Backflow Inspection Lake &amp;&nbsp;Cook County&nbsp;IL
                        </h2>
                        <h3 class="section_heading text-center">
                            Certified RPZ Backflow Inspector Lake Zurich
                        </h3>
                    </div>
                    <div class="col-xl-6 d-xl-flex align-items-center column">
                        <div class="text-wrap">
                            <h4 class="paragraph_heading">Local RPZ Backflow Valve Testing  &amp;&nbsp;Installation Near Lake Zurich&nbsp;IL</h4>
                            <p class="mb-2">
                                Protect your water supply with expert <strong>RPZ backflow testing, installation, and repair</strong> services from Maximum Plumbing. With Max as a certified Cross Connection Control Inspector, we ensure compliance with Illinois regulations for residential, commercial, and industrial properties.
                            </p>
                            <ul class="mb-4">
                                <li>Annual RPZ valve testing to prevent backflow contamination.</li>
                                <li>Professional installation tailored to your system’s needs.</li>
                                <li>Reliable repairs and replacements for malfunctioning or outdated valves.</li>
                            </ul>

                            <p class="mb-5">
                                Serving Lake and Cook County, we offer prompt, affordable solutions to keep your water safe and compliant. <a class="phone_link" title="Call Local RPZ Backflow Valve Inspector Near Lake Zurich, IL area" href="tel:{{ config('app.phone') }}">Contact us today</a> for professional backflow prevention services!
                            </p>
                            <h4 class="paragraph_heading">Need Info About RPZ Valve Inspection Near Lake Zurich?</h4>
                            <p class="button_wrap mb-5 mb-xl-0 d-flex align-items-center justify-content-lg-start">
                                <a class="custom_button ms-0" title="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}" href="{{ route('rpz-backflow') }}">
                                    RPZ Backflow Info&nbsp; <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 pe-lg-5">
                        <div class="image_wrap">
                            <img class="content_image image450" src="/images/local-plumber-rpz-backflow-lake-zurich-il450.png"
                                 title="Professional RPZ Backflow Testing Certified Plumber Near {{ $location['city_state'] }}"
                                 alt="Professional RPZ Certified Plumber And Equipment Near {{ $location['city_state'] }}" >
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-contact-bar location="{{ $location['city_state'] }}" class="my-1"/>

        <section id="home_water_heater_section" class="section_row">
            <div class="content_wrap_xl">
                <div class="row">
                    <div class="col-12 order-first mb-3">
                        <h2 class="small_heading text-center">
                            Professional Local Water Heater Plumbers near <span class="d-inline-block">{{ $location['city_state'] }}</span>
                        </h2>
                        <h3 class="section_heading text-center">
                            Water Heater Repairs <span class="d-inline-block">&amp; Installations</span>
                        </h3>
                    </div>
                    <div class="col-xl-6 order-xl-last d-xl-flex align-items-center column">
                        <div class="text-wrap">
                            <h4 class="paragraph_heading">Trusted Water Heater Plumbers | Lake Zurich</h4>
                            <p>
                                Maximum Plumbing, Inc. is your trusted and dependable partner for all things related to water heaters in the Lake Zurich area.
                                We specialize in a comprehensive range of water heater services, including repairs, installations, and replacements, all backed by our unwavering commitment to quality.
                            </p>
                            <p class="mb-4">
                                When your water heater experiences issues, don't hesitate to reach out to us. Our team of skilled Lake Zurich plumbers is always at your service, catering to both residential and commercial water heater needs with prompt and efficient solutions.
                            </p>
                            <h4 class="paragraph_heading">Conventional &amp; Tankless Water Heaters | Lake Zurich</h4>
                            <p class="mb-3">
                                We have extensive experience working with a variety of water heating systems, including conventional and tankless water heaters. Our aim is to ensure that your water heater is installed expertly and functioning at its best, so you can enjoy hot and refreshing showers even on the coldest days in Lake Zurich.
                                Trust Maximum Plumbing, Inc. to meet all your water heater needs.
                            </p>
                            <p class="mb-5">
                                Choose Maximum Plumbing, Inc. as your trusted partner for all your water heater requirements. Contact us today for reliable and professional water heater services.
                            </p>
                            <h4 class="paragraph_heading">Need a trusted water heater plumber near Lake Zurich?</h4>
                            <p class="button_wrap mb-5 mb-xl-0 d-flex align-items-center justify-content-lg-start">
                                <a class="custom_button ms-0" title="Local Water Heater Plumber in {{ $location['city_state'] }}" href="/local-plumbers-water-heater-repairs-and-installations">
                                    Water Heater Service&nbsp; <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 pe-lg-5">
                        <div class="image_wrap">
                            <img class="content_image" src="{{ asset('images/images/best-local-plumber-water-heater-installation-zurich-il700x700.jpg') }}"
                                 title="Local Plumber Water Heater Installation in {{ $location['city_state'] }}"  alt="Water Heater">
                            <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                 alt="Plumbing Company Logo" title="Local Water Heater Plumber in {{ $location['city_state'] }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="home_testimonial_section" class="section_row testimonial_section">
            <div class="content_wrap py-5">
                <h2 class="small_heading text_blue">
                    Trusted Local Plumbers near <span class="d-inline-block">{{$location['city_state']}}</span>
                </h2>
                <h3 class="section_heading">
                    Quality Plumbing Service <span class="d-inline-block">= Satisfied Customers</span>
                </h3>

                <x-review-slider class="reviewSliderFull" location="{{$location['city']}}"/>
                <br>
                <div class="button_wrap text-center">
                    <p class="paragraph_heading text-center text-capitalize mb-3">Are You Our Customer? Leave A Review Here!</p>
                    <a class="custom_button" href="/leave-review"  title="Local Plumber near {{$location['city_state']}}">
                        Leave A Review
                    </a>
                </div>
            </div>
        </section>

        <section id="home_drain_section" class="section_row section_dark">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-6 column column_lg_left">
                        <div class="table_display">
                            <div class="table_cell">
                                <h2 class="small_heading text-lg-start">
                                    Drain and main line rodding services <span class="d-inline-block">{{ $location['city_state'] }}</span>
                                </h2>
                                <h3 class="section_heading text-lg-start">
                                    Main Line Rodding <span class="d-inline-block">with camera inspection</span>
                                </h3>

                                <h4 class="paragraph_heading text-white">Professional Drain Clog Removal | Lake Zurich</h4>
                                <p>
                                    We provide professional drain and main line rodding services near Lake Zurich and all the surrounding areas.
                                    Whether it is a clogged sink, drain, or sewer main line our plumbers from Lake Zurich have the know-how and equipment to remove any obstructions.
                                </p>
                                <p class="mb-5">
                                    Call us as soon as you notice your sink or bathtub is draining slower than usual.
                                    Max and his team of skilled plumbers are ready to help troubled homeowners in the Lake Zurich area with their drain and plumbing issues.
                                </p>
                                <h4 class="paragraph_heading text-center text-lg-start text-white">Need a drain specialist in Lake Zurich?</h4>
                                <p class="button_wrap text-lg-start mb-4 mb-lg-0">
                                    <a class="custom_button ms-lg-0" title="Local Water Heater Plumber in {{ $location['city_state'] }}" href="tel:1-{{ config('app.phone') }}">
                                        <i class="fas fa-phone-alt"></i> Call Local Plumber
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 column column_lg_right">
                        <div class="image_wrap">
                            <img class="content_image" src="/images/drain-and-main-line-rodding-lake-zurich-il700x700.jpg"
                                 title="Local Plumber Main Line Rodding in {{ $location['city_state'] }}"  alt="Drain Rodding" />
                            <img class="logo_absolute" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png') }}"
                                 alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] }}" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-facebook-feed />

        <section id="home_toilets_sinks_section" class="section_row">
            <div class="content_wrap">
                <div class="row">
                    <div id="toilet_service_column" class="col-lg-6 column service_column">
                        <div class="absolute_wrap">
                            <div class="table_display">
                                <div class="table_cell">
                                    <div class="text_wrap">
                                        <div class="icon_image_wrap">
                                            <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                        </div>
                                        <h2 class="small_heading color_blue">
                                            Local Residential Plumbers near <span class="d-inline-block">Lake Zurich</span>
                                        </h2>
                                        <h3 class="section_heading">
                                            Toilet Installation/Repair
                                        </h3>
                                        <p class="text-center fs-6">
                                            Experiencing toilet troubles like leaks or wobbles? Our team of expert Lake Zurich plumbers is here to address your toilet installation and repair needs in Lake Zurich, IL, and the surrounding areas. We prioritize precision and reliability, ensuring your toilet functions flawlessly and efficiently, all backed by transparent communication and competitive pricing.
                                            Contact us today for a seamless toilet solution that enhances your home's comfort.
                                        </p>
                                        <h4><b>Need a trusted plumber near the Lake Zurich area?</b></h4>

                                        <p class="button_wrap">
                                            <a class="custom_button" href="/local-plumbers-toilet-sink-faucet-installations-and-repairs">
                                                toilet plumbing service
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sink_service_column" class="col-lg-6 column service_column">
                        <div class="absolute_wrap">
                            <div class="table_display">
                                <div class="table_cell">
                                    <div class="text_wrap">
                                        <div class="icon_image_wrap">
                                            <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                        </div>
                                        <h2 class="small_heading color_blue">
                                            Professional Plumbers near <span class="d-inline-block">Lake Zurich</span>
                                        </h2>
                                        <h3 class="section_heading">
                                            Sinks/Faucets/Bathtubs
                                        </h3>
                                        <p class="text-center">
                                            Contact our licensed Lake Zurich, IL plumbers for expert residential and commercial plumbing services. From sink, and faucets, to bathtub installations and repairs, we combine quality work, aesthetics, and competitive pricing to meet your plumbing needs with professionalism and care.
                                        </p>
                                        <h4><b>Need a professional plumber near the Lake Zurich area?</b></h4>

                                        <p class="button_wrap">
                                            <a class="custom_button" href="/local-plumbers-toilet-sink-faucet-installations-and-repairs">
                                                local plumbing service
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-contact-bar location="{{ $location['city_state'] }}" class="my-1"/>

        <section class="map_section section_row">
            <div class="row map_wrapper">
                <div class="col-sm-12 column">
                    <div class="map_container">
                        <iframe class="responsive_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79525.13077034686!2d-88.07903917714661!3d42.206528550161515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fa261e28b5491%3A0x68c9371127538342!2sMaximum%20Plumbing%20inc.!5e0!3m2!1sen!2sus!4v1581630691182!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section id="brand_row" class="section_row">
            <div class="content_wrap">
                <h3 class="small_heading center_text">Local Professional Plumbers near <span class="d-inline-block">{{ $location['city_state'] }}</span></h3>
                <h4 class="section_heading">We partnered with best plumbing brands</h4>
                <br>
                <div id="brandSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#brandSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#brandSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row">
                                <div class="col-6 col-md-2">
                                    <img alt="Moen Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-moen-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Bradford White Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-bradford-white-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Kohler Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-kohler-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Ridgid Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-ridgid-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Ferguson Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-ferguson-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Zoeller Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-zoeller-plumber-lake-zurich-il.jpg">
                                </div>
                            </div>
                        </div> <!--end of .item-->

                        <div class="carousel-item" data-bs-interval="10000">
                            <div class="row">
                                <div class="col-6 col-md-2">
                                    <img alt="Bosch Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-bosch-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Toto Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-toto-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Hansgrohe Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-hansgrohe-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Geberit Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-geberit-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Insinkerator Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-insinkerator-plumber-lake-zurich-il.jpg">
                                </div>

                                <div class="col-6 col-md-2">
                                    <img alt="Grohe Logo" title="Local Plumber near Lake Zurich, IL"
                                         src="/images/logo-grohe-plumber-lake-zurich-il.jpg">
                                </div>
                            </div>
                        </div> <!--end of .item-->

                    </div> <!--end of .carousel-inner-->
                </div><!-- end of .carousel -->
            </div><!-- end of .col-->
        </section>

    </div><!-- end of .page_content-->



@endsection
