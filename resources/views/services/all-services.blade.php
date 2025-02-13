@extends('app')

@section('title', 'All Drain & Plumbing Lake Zurich')

@section('description', 'Best local plumbers all plumbing services near Lake Zurich, IL. Professional plumbing and drain cleaning services around Lake Zurich.')

@section('content')

    <div id="all_services_page" class="interior_page">

        <a id="all-services"></a>
        <section class="section_row top_section">
            <div class="content_wrap">
                <div class="row">
                    <div class="col-lg-8 column column_lg_left">
                        <div class="small_banner">
                            <div class="inside_wrap">
                                <div class="text_table">
                                    <div class="text_cell">

                                        <p class="local_service">Best Local Plumbers | {{ $location['city_state'] }}</p>
                                        <h1 class="column_heading main_heading">
                                            <u>Our Plumbing Services</u>
                                            Plumbing | Drain | Appliances
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
                                            <span class="text_cell table_cell"><b>Residential &amp; Commercial Plumbing</b> <br>Professional Plumbing Services near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Water Heaters</b> <br>Repair &amp; Installation near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Sump Pumps</b> <br>Including Battery Backup near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Bathroom &amp; Kitchen Fixtures</b> <br>Faucets, Sinks, Toilets near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Water &amp; Gas Lines</b> <br>Installation &amp; Repair near Lake Zurich</span>
                                        </p>
                                        <p class="action_lead table_display">
                                            <span class="icon_cell table_cell"><i class="fas fa-check" aria-hidden="true"></i></span>
                                            <span class="text_cell table_cell"><b>Sewer &amp; Drain Clog Removal</b> <br>w/ Camera Inspection near Lake Zurich</span>
                                        </p>
                                    </div>

                                    <p class="px-5 py-3 pb-4">
                                        <strong>Maximum Plumbing, Inc.</strong> is your trusted local source for comprehensive plumbing and drain cleaning services in Lake Zurich and the neighboring regions.
                                        With a rich history of excellence and a dedicated team of skilled professionals, we are your solution for all plumbing and drainage concerns.
                                    </p>
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
                            <p>Call us now to request any plumbing service
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
                    <div class="col-lg-4 column sidebar_left mb-5 mb-lg-0">
                        <x-review-slider class="reviewSlider" location="{{$location['city']}}" />

                        <div class="image_wrap semi_white">
                            <img class="content_image image200" src="{{ asset('images/local-plumbers-plumbing-services-around-lake-zurich-il-area-drop-leak300.png') }}"
                                 title="Drain &amp; Main Line Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}">
                            <h3 class="paragraph_heading">Residential &amp; Commercial Plumbing</h3>
                        </div>
                        <br>
                        <div class="image_wrap mb-4">
                            <img class="content_image grey_back" src="{{ asset('images/local-plumber-residential-plumbing-services-lake-zurich-il700x700.jpg') }}"
                                 title="Drain &amp; Main Line Plumbers in {{ $location['city_state'] }}"
                                 alt="Local Plumbers in {{ $location['city_state'] }}">
                        </div>
                        <div>
                            <h4 class="fs-5 fw_500">24/7 Emergency Plumbing Services</h4>
                            <p>
                                Plumbing issues can strike at any hour. That's why we offer round-the-clock emergency plumbing services.
                                Trust us to respond promptly and effectively whenever a crisis arises.
                            </p>
                        </div>
                    </div> <!--end of .column-->

                    <div class="col-lg-8 column column_lg_right">
                        <h2 class="small_heading">Local Plumbers | Drain &amp; Plumbing Services Lake Zurich, IL</h2>
                        <h3 class="column_heading">Our Comprehensive Plumbing and Drain Cleaning Services</h3>

                        <p class="mb-4">
                            Don't allow plumbing and drainage problems to disrupt your daily life. Contact Maximum Plumbing, Inc. today for reliable plumbing and drain cleaning services in Lake Zurich and the surrounding areas.
                            Our extensive array of services encompasses everything, from essential water heaters and sump pumps to detecting elusive water leaks and tackling stubborn drain clogs.
                        </p>
                        <ul class="all_services_list list-disc ps-4">
                            <li>
                                <h4 class="service_heading">Water Heater Installation and Repair</h4>
                                <p>
                                    Ensure an uninterrupted supply of hot water with our expert water heater installation and repair services.
                                    We specialize in all types of water heaters, tailoring solutions to meet your specific needs.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Water Heater Flush and Maintenance</h4>
                                <p>
                                    Extend the life of your water heater with our thorough water heater flush and maintenance services.
                                    Regular maintenance prevents sediment buildup and ensures optimal performance.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Boiler Installation and Repair</h4>
                                <p>
                                    Keep your home warm with our boiler installation and repair services. We provide expert installation and maintenance to maximize efficiency and safety.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Sump Pump Maintenance and Installation</h4>
                                <p>
                                    Shield your basement from potential flooding with our sump pump services.
                                    Our experts provide comprehensive maintenance, installation, and repair solutions to safeguard your home.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Water Leak Detection and Repair</h4>
                                <p>
                                    Protect your property from water damage by entrusting us with water leak detection and repairs.
                                    Our cutting-edge technology ensures swift and precise detection, followed by effective solutions to address leaks promptly.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Drain Clog Removal</h4>
                                <p>
                                    Bid farewell to frustrating drain clogs with our efficient and advanced drain cleaning services.
                                    We deploy state-of-the-art equipment to clear blockages in sinks, toilets, and sewer lines, restoring optimal drainage.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Pipe Repairs and Replacements</h4>
                                <p>
                                    Our skilled technicians are adept at both minor repairs and complete pipe replacements.
                                    Regardless of the scale, we use the best materials and techniques to ensure long-lasting solutions.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Kitchen Sink Garbage Disposal Services</h4>
                                <p>
                                    Keep your kitchen clean and functional with a properly working sink garbage disposal. We install, repair, and replace garbage disposal units, making food waste disposal convenient and trouble-free.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Fixture Installation and Repair</h4>
                                <p>
                                    Elevate your kitchen or bathroom with our fixture installation and repair services.
                                    From faucets and sinks to toilets and showers, we provide professional installation and maintenance for all fixtures.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Gas Line Services</h4>
                                <p>
                                    Safety is paramount with gas lines. Rely on our experts for safe and efficient gas line installation and repairs, adhering to all relevant codes and regulations.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Garbage Disposal Services</h4>
                                <p>
                                    Keep your kitchen clean and functional with our garbage disposal services.
                                    We install, repair, and maintain garbage disposals to make food waste disposal hassle-free.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Trenchless Sewer Line Repair</h4>
                                <p>
                                    Preserve your landscape and minimize disruption with our trenchless sewer line repair.
                                    Our non-invasive techniques ensure efficient repairs without extensive excavation.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Appliance Hookup and Maintenance</h4>
                                <p>
                                    Count on us for professional appliance hookup and maintenance services.
                                    We install and maintain dishwashers, washing machines, and water softeners, ensuring they function flawlessly.
                                </p>
                            </li>

                            <li>
                                <h4 class="service_heading">Outside Spigot Installation and Repair</h4>
                                <p>
                                    Enhance the functionality of your outdoor spaces with our outside spigot services. We install and repair outdoor faucets to provide convenient access to water for your garden and other outdoor needs.
                                </p>
                            </li>

                        </ul>
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
