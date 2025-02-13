<section class="section_row contact_section py-5 bg_blue {{ $attributes->get('class') }}">

    <div class="row featurette content_wrap wider">
        <div class="col-lg-7 d-flex align-items-center">
            <div class="text_wrap">
                <h2 class="featurette-heading fs-1 text-center text-lg-start">Contact Local Plumbers <span class="d-inline-block">in Northbrook</span></h2>
                <h3 class="paragraph_heading mb-3 fs-4">Leaking pipes or faucets? Clogged drains or sewer lines? Water is draining really slow?</h3>
                <p>
                    DPS Northbrook provides all types of plumbing, drain cleaning, and hydro jetting services at affordable cost.
                </p>
                <a href="tel: 1-{{ config('app.phone') }}"
                   class="call_phone d-flex text-center text-white align-items-center mb-3 fs-5 text-decoration-none justify-content-center justify-content-lg-start">
                    <span class="pe-2">Call Now</span>
                    <b class="fs-3 flex-column">
                        <i class="fas fa-phone-alt"></i>
                        {{ config('app.phone') }}</b>
                </a>
                <p class="mb-4">
                    Our experienced plumbers are ready to service residential and commercial clients near Northbrook and all
                    the surrounding areas including Deerfield, Highland Park, Glencoe, Winnetka, Northfield, Glenview, Wheeling, or Prospect Heights.
                </p>

                <div class="badge_license_widget mb-4 mb-lg-0">
                    <div class="row">
                        <div class="column align-self-center col-6 col-lg-2 py-2 px-3">
                            <a target="_blank" href="https://www.expertise.com/il/arlington-heights/plumbing#DrainPlumbingServices">
                                <img id="expertise_link_image" class="content_image image150 bg-white" src="/images/best-plumbing-service-expertise-badge-northbrook.png" title="Best Local Plumbers in Northbrook, IL" alt="Local Plumbers" />
                            </a>
                        </div>
                        <div class="column align-self-center col-6 col-lg-2 py-2 px-3">
                            <a target="_blank" href="https://www.google.com/search?client=firefox-b-1-d&q=drain+and+plumbing+services+wheeling#lrd=0x880fbb8de39e836f:0xc5b136b95ef9390,1,,," >
                                <img id="google_link_image" class="content_image image150" src="/images/local-plumber-google-stars150-northbrook.png" title="Best Local Plumbers in Northbrook, IL" alt="Local Plumbers" />
                            </a>
                        </div>
                        <div class="column align-self-center col-5 col-lg-2 py-2 px-3">
                            <a target="_blank" href="https://www.yelp.com/biz/drain-and-plumbing-services-wheeling">
                                <img id="yelp_link_image" class="content_image image150" src="/images/local-plumbers-yelp-logo150-northbrook.png" title="Best Local Plumbers in Northbrook, IL" alt="Local Plumbers" />
                            </a>
                        </div>
                        <div class="column align-self-center col-7 col-lg-5 py-2 px-3 w_40">
                            <a target="_blank" href="https://www.google.com/local/provider?cid=4169657903&bid=2509218452&pid=2510733761">
                                <img id="google_guarantee_link_image" class="content_image image250" src="/images/google-guaranteed-local-plumbing-service-northbrook.png" title="Best Local Plumbers in Northbrook, IL" alt="Local Plumbers" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="contact_form_wrap bg_blue">
                <p class="form_heading text-center text-uppercase fs-3 mb-3">Contact Local Plumbers</p>
                <x-contact-form button="white reversed"/>
            </div>
        </div>
    </div>
</section>
