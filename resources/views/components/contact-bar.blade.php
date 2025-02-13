<section class="section_row callout_section {{ $attributes->get('class') }}">
    <div class="content_wrap">
        <div class="row">
            <div class="col-lg-4 column column_lg_left d-lg-flex align-items-center">
                <div>
                    <a class="d-flex callout_links mb-2" href="tel:{{ config('app.phone') }}" title="Local Plumber near {{ $location }}">
                        <div class="icon_cell d-flex align-items-center">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i>
                        </div>
                        <div class="text_cell d-flex align-items-center">
                            <div>
                                Need a plumber? <span class="d-inline-block">Call us now!</span>
                                <span class="big_text">1-{{ config('app.phone') }}</span>
                            </div>
                        </div>
                    </a>
                    <a class="d-flex callout_links" href="/contact-local-plumbers-lake-zurich-il" title="Message Local Plumber near {{ $location }}">
                        <div class="icon_cell d-flex align-items-center">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text_cell d-flex align-items-center">
                            <p class="button_wrap text-start">
                                <span class="custom_button">
                                    Send a message
                                </span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 column">
                <div class="d-lg-flex align-items-center">
                    <div class="mx-auto">
                        <p class="column_heading text-center fs-3 mb-2">100% Free Estimates</p>
                        <img class="content_image image200 mb-2" src="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo250.png') }}"
                             alt="Plumbing Company Logo" title="Local Plumber in {{ $location }}" />
                        <p class="text-center fs-5 bold mb-0">Licensed. Bonded. Insured</p>
                        <p class="text-center text-dark fw-light mt-1">License# 055-044021</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 column column_lg_right d-lg-flex align-items-center justify-content-lg-end">
                <div class="p-3">
                    <script defer async src='https://cdn.trustindex.io/loader.js?7bdbef9191a7116e52069ac10de'></script>
                </div>
            </div>
        </div>
    </div>

</section>