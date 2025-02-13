<footer class="py-3">
    <section class="section_row">
        <div class="content_wrap p-3 py-4">
            <div class="d-lg-flex text-center justify-content-lg-between content_wrap">
                <div class="align-items-center flex-lg-column col-lg-3 justify-content-center justify-content-lg-start">
                    <div class="footer_nav pb-3 text-center text-lg-start mb-3 mb-lg-0">
                        <p class="footer_heading">Site Links</p>
                        <a class="nav-link" href="/" title="Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Home <i class="fas fa-angle-right"></i></a>
                        <a class="nav-link" href="{{ route('water-heaters') }}" title="Water Heater Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Water Heater Services | <span class="d-inline-block">{{ $location['city'] ?? 'Lake Zurich IL' }} <i class="fas fa-angle-right"></i></span></a>
                        <a class="nav-link" href="{{ route('rpz-backflow') }}" title="RPZ Backflow Testing near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">RPZ Backflow Testing | <span class="d-inline-block">{{ $location['city'] ?? 'Lake Zurich IL' }} <i class="fas fa-angle-right"></i></span></a>
                        <a class="nav-link" href="{{ route('sump-pumps') }}" title="Sump Pump Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Sump Pump Services | <span class="d-inline-block">{{ $location['city'] ?? 'Lake Zurich IL' }} <i class="fas fa-angle-right"></i></span></a>
                        <a class="nav-link" href="{{ route('drain-services') }}" title="Drain Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Drain &amp; Main Line | <span class="d-inline-block">{{ $location['city'] ?? 'Lake Zurich IL' }} <i class="fas fa-angle-right"></i></span></a>
                        <a class="nav-link" href="{{ route('sinks-toilets') }}" title="Kitchen &amp; Bathroom Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Toilets, Sinks &amp; Bathtubs | <span class="d-inline-block">{{ $location['city'] ?? 'Lake Zurich IL' }} <i class="fas fa-angle-right"></i></span></a>
                        <a class="nav-link" href="{{ route('garbage-disposals') }}" title="Sink Garbage Disposal Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Sink Garbage Disposals | <span class="d-inline-block">{{ $location['city'] ?? 'Lake Zurich IL' }} <i class="fas fa-angle-right"></i></span></a>
                        <a class="nav-link" href="{{ route('contact') }}" title="Contact Local Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Contact <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="align-items-center  text-decoration-none flex-lg-column col-lg-5">
                    <div id="footer_address" class="text-center mb-2">
                        <h3 class="footer_heading text-center">Local Plumbers | {{ $location['city_state'] ?? 'Lake Zurich, IL' }}</h3>
                        <h4 class="footer_heading text-center mb-1">MAXIMUM PLUMBING, INC</h4>
                        <a href="https://www.google.com/maps/place/Maximum+Plumbing,+Inc./@42.204194,-88.0532437,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x68c9371127538342!8m2!3d42.204194!4d-88.051055?authuser=1"
                           target="_blank" class="address" title="Local Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                            <i class="fas fa-map-marker-alt pe-1"></i> 23474 Garden Ln
                            <span class="d-block ps-3">Lake Zurich, IL 60047</span>
                        </a>
                    </div>
                    <a class="footer_logo_link d-block text-decoration-none mb-4" href="/" title="Local Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                        <img class="logo" id="footer_logo" src="{{ asset('images/maximum-plumbing-logo300-inverted.png') }}"
                             title="Local Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}" alt="Maximum Plumbing Logo"/>
                        <p class="text-center text-white mb-1">Licensed. Bonded. Insured.</p>
                        <p class="text-center text-white">License# 055-044021</p>
                    </a>
                    <h3 class="fs-6 text-white text-center mb-2">Need a trusted plumber near <span class="d-inline-block">{{ $location['city_state'] ?? 'Lake Zurich, IL' }}</span>?</h3>
                    <a href="tel:1-{{ config('app.phone') }}" id="footer_phone" title="Call Local Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}"
                       class="call_phone d-flex text-center mx-auto mb-4 mb-lg-0 justify-content-center align-items-center">
                        <span class="px-2 text_yellow">Call Us Now</span>
                        <span class="fs-6 flex-column fw_500"><i class="fas fa-phone-alt text_yellow"></i> {{ config('app.phone') }}</span>
                    </a>
                </div>

                <div class="col-lg-4 text-lg-end footer_right_column justify-content-lg-end d-lg-flex">
                    <div class="inside_wrap">
                        <p class="footer_heading text-center">Our Social Media</p>
                        <div id="footer_social" class="footer_widget mb-4">
                            <div class="column">
                                <a target="_blank" title="Visit Maximum Plumbing near {{ $location['city_state'] ?? 'Lake Zurich, IL' }} on Facebook"
                                   href="https://www.facebook.com/maximumplumbinginc/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a target="_blank" title="Visit Maximum Plumbing near {{ $location['city_state'] ?? 'Lake Zurich, IL' }} on Yelp"
                                   href="https://www.yelp.com/biz/maximum-plumbing-lake-zurich-2?utm_campaign=www_business_share_popup&utm_medium=copy_link&utm_source=(direct)"><i class="fab fa-yelp" aria-hidden="true"></i></a>
                                <a target="_blank" title="Visit Maximum Plumbing near {{ $location['city_state'] ?? 'Lake Zurich, IL' }} on Instagram"
                                   href="https://www.instagram.com/maximumplumbinginc"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a target="_blank" title="Visit Maximum Plumbing near {{ $location['city_state'] ?? 'Lake Zurich, IL' }} on YouTube"
                                   href="https://www.youtube.com/channel/UCHR2UV7hjM71ckQAniOv1uA"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <p class="footer_heading text-center">Various Payment Methods</p>
                        <img class="content_image image300" src="{{ asset('images/local-plumber-near-lake-zurich-il-payment-methods400.png')}}" title="Local Plumbers Payment Methods | {{ $location['city_state'] ?? 'Lake Zurich, IL' }}" alt="Accepted Payments">
                        <br>
                        <div class="text-center text-lg-end justify-content-lg-end">
                            <a href="tel:1-{{ config('app.phone') }}"
                               class="text-center fs-6 text-decoration-none justify-content-center custom_button">
                                <i class="fas fa-phone-alt"></i><span class="ps-1">Call Us Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section_footer_copyright" class="section_row">
            <div class="content_wrap">
                <p id="copyright_tag">
                    Copyright &copy;<?php echo date('Y'); ?> Maximum Plumbing, Inc.
                    <span class="d-inline-block">All Rights Reserved.</span><br />
                    <a id="eastway_link" href="https://eastwaywebdesign.com/" target="_blank">Milwaukee Website Design</a>
                </p>
            </div>
        </div>
    </section>
    <div id="scroll_up_btn_wrap">
        <a id="scroll_up_btn" href="#top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    </div>
</footer>
