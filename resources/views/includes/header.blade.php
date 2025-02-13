<header id="header">
    <meta itemprop="name" content="Maximum Plumbing Services">
    <meta itemprop="priceRange" content="$">
    <meta itemprop="image" content="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png')}}">
    <meta itemprop="logo" content="{{ asset('images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png')}}">
    <meta itemprop="url" content="{{ $canonical }}">
    <meta itemprop="telephone" content="{{ config('app.phone') }}">
    <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
        <meta itemprop="streetAddress" content="23474 Garden Ln">
        <meta itemprop="addressLocality" content="Lake Zurich">
        <meta itemprop="addressRegion" content="IL">
        <meta itemprop="postalCode" content="60047">
        <meta content="US" itemprop="addressCountry">
    </span>
    <span itemprop="areaServed" itemscope itemtype="https://schema.org/City">
        <meta itemprop="name" content="Lake Zurich, IL">
    </span>

    <span itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
        <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
            <meta itemprop="name" content="Plumbing Services">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Faucet Leak Repair">
                    </span>
                </span>
            </span>
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Toilet Repair &amp; Installation">
                    </span>
                </span>
            </span>
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Water Heater Repair &amp; Installation">
                    </span>
                </span>
            </span>
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Sump Pump Repair &amp; Installation">
                    </span>
                </span>
            </span>
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Garbage Disposal Repair &amp; Installation">
                    </span>
                </span>
            </span>
        </span>
        <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
            <meta itemprop="name" content="Drain Services">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Main Line Rodding">
                    </span>
                </span>
            </span>
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Kitchen Drain Clog Removal">
                    </span>
                </span>
            </span>
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Bathroom Drain Clog Removal">
                    </span>
                </span>
            </span>
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                    <span itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="Sewer Cleaning">
                    </span>
                </span>
            </span>
        </span>
    </span>
    <div class="content_wrap">
        <div class="d-lg-flex justify-content-lg-between align-items-center w-100">
            <div class="d-lg-flex text-center text-lg-start p-0 mb-2 mb-lg-0">
                <div id="header_logo">
                    <a href="/" title="Local Plumbers in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                        <img id="main_logo" class="img-responsive" src="{{ asset('images/local-plumbers-maximum-plumbing-logo300.png') }}"
                             alt="Plumbing Company Logo" title="Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                    </a>
                </div>
            </div>
            <div id="header_heading" class="text-center mb-4 mb-lg-0">
                <p class="section_heading company_name mb-4 mb-lg-2">Maximum Plumbing, Inc.</p>
                <div class="d-flex align-items-center justify-content-center pt-1">
                    <a class="me-2 me-lg-3" href="https://www.bbb.org/us/il/lake-zurich/profile/plumber/maximum-plumbing-inc-0654-1000043422" target="_blank">
                        <img class="badge_image" src="{{ asset('images/bbb-badge-a-plus-local-plumber-lake-zurich-il150.png')}}"
                              alt="BBB Plumber" title="BBB Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                    </a>
                    <p class="text-start fs-4 paragraph_heading text-capitalize mx-0 mb-0 lh-sm">Trusted Local Plumbers
                        <span class="fs-6 mb-0 d-block ps-1 text-start">{{ $location['city_state'] ?? 'Lake Zurich, IL' }} area</span>
                    </p>
                </div>
            </div>
            <div>
                <div id="header_phone_div" class="d-lg-flex me-lg-0">
                    <div class="inside_wrap">
                        <a id="phone_link" class="table_display header_cta_links" href="tel:{{ config('app.phone') }}" title="Call Local Garage Door Repair in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                            <div class="table_cell icon_cell">
                                <img  class="icon_image" src="{{ asset('images/call-local-plumber-lake-zurich-il-24h-icon100.png')}}"
                                      alt="Call Plumber" title="Call Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                            </div>
                            <div class="table_cell text_cell">
                                call us now
                                <span class="big_text">{{ config('app.phone') }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="header_message_div" class="d-lg-flex justify-content-lg-end">
                    <a id="message_link" class="table_display header_cta_links pe-lg-0" href="/contact-local-plumbers-lake-zurich-il" title="Message Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                        <div class="table_cell icon_cell">
                            <img  class="icon_image" src="{{ asset('images/contact-local-plumber-lake-zurich-il-icon100.png') }}"
                                  alt="Contact Plumber" title="Contact Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                        </div>
                        <div class="table_cell text_cell">
                            <span class="big_text">Send a message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <nav id="navbar" class="navbar navbar-expand-lg justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNavAltMarkup">
            <div class="navbar-nav m-auto d-lg-flex">
                <div class="nav-item">
                    <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : ''}}" aria-current="page" href="/" title="Local Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Home</a>
                </div>
                <div class="nav-item dropdown">
                    <a role="button" id="servicesDropdownMenu" data-bs-toggle="dropdown" class="nav-link dropdown-toggle
                            {{ request()->routeIs('all-services')
                                || request()->routeIs('rpz-backflow')
                                || request()->routeIs('water-heaters')
                                || request()->routeIs('sump-pumps')
                                || request()->routeIs('drain-services')
                                || request()->routeIs('sinks-toilets')
                                || request()->routeIs('garbage-disposals')
                                ? 'active' : ''}}" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Local Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                        Plumbing Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdownMenu">
                        <a class="dropdown-item {{ request()->routeIs('all-services') ? 'active' : ''}}" href="{{ route('all-services') }}" title="Professional Plumbing Services near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Our Plumbing Services</a>
                        <a class="dropdown-item {{ request()->routeIs('water-heaters') ? 'active' : ''}}" href="{{ route('rpz-backflow') }}" title="RPZ Backflow Testing Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">RPZ Backflow Testing</a>
                        <a class="dropdown-item {{ request()->routeIs('water-heaters') ? 'active' : ''}}" href="{{ route('water-heaters') }}" title="Water Heater Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Water Heater Services</a>
                        <a class="dropdown-item {{ request()->routeIs('sump-pumps') ? 'active' : ''}}" href="{{ route('sump-pumps') }}" title="Sump Pump Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Sump Pump Systems</a>
                        <a class="dropdown-item {{ request()->routeIs('drain-services') ? 'active' : ''}}" href="{{ route('drain-services') }}" title="Drain Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Drain &amp; Main Line Rodding</a>
                        <a class="dropdown-item {{ request()->routeIs('sinks-toilets') ? 'active' : ''}}" href="{{ route('sinks-toilets') }}" title="Kitchen &amp; Bathroom Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Toilets, Sinks &amp; Bathtubs</a>
                        <a class="dropdown-item {{ request()->routeIs('garbage-disposals') ? 'active' : ''}}" href="{{ route('garbage-disposals') }}" title="Sink Garbage Disposal Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Sink Garbage Disposals</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a role="button" id="reviewsDropdownMenu" data-bs-toggle="dropdown" class="nav-link dropdown-toggle
                            {{  request()->routeIs('leave-review')
                                || request()->routeIs('testimonials')
                                ? 'active' : ''}}" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Local Plumber Reviews {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                        Plumbing Reviews
                    </a>
                    <div class="dropdown-menu" aria-labelledby="reviewsDropdownMenu">
                        <a class="dropdown-item {{ request()->routeIs('testimonials') ? 'active' : ''}}" href="{{ route('testimonials') }}" title="Local Plumber Reviews {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Local Testimonials</a>
                        <a class="dropdown-item {{ request()->routeIs('leave-review') ? 'active' : ''}}" href="{{ route('leave-review') }}" title="Local Plumber Reviews {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Leave Your Feedback</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a role="button" id="serviceAreaDropdownMenu" data-bs-toggle="dropdown" class="nav-link dropdown-toggle
                            {{  request()->routeIs('arlington-heights')
                                || request()->routeIs('barrington')
                                || request()->routeIs('buffalo-grove')
                                || request()->routeIs('vernon-hills')
                                ? 'active' : ''}}" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Local Plumber near {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
                        Service Area
                    </a>
                    <div class="dropdown-menu" aria-labelledby="serviceAreaDropdownMenu">
                        <a class="dropdown-item {{ request()->routeIs('arlington-heights') ? 'active' : ''}}" href="{{ route('arlington-heights') }}" title="Local Plumber near Arlington Heights, IL">Local Plumbers | Arlington Heights IL</a>
                        <a class="dropdown-item {{ request()->routeIs('barrington') ? 'active' : ''}}" href="{{ route('barrington') }}" title="Local Plumber near Barrington, IL">Local Plumbers | Barrington IL</a>
                        <a class="dropdown-item {{ request()->routeIs('buffalo-grove') ? 'active' : ''}}" href="{{ route('buffalo-grove') }}" title="Local Plumber near Buffalo Grove, IL">Local Plumbers | Buffalo Grove IL</a>
                        <a class="dropdown-item {{ request()->routeIs('vernon-hills') ? 'active' : ''}}" href="{{ route('vernon-hills') }}" title="Local Plumber near Vernon Hills, IL">Local Plumbers | Vernon Hills IL</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : ''}}" aria-current="page" href="{{ route('contact') }}" title="Contact Local Plumber {{ $location['city_state'] ?? 'Lake Zurich, IL' }}">Contact</a>
                </div>
                <div class="nav-item">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>