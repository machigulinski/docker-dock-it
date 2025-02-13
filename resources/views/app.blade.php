@php
    $canonical = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
    "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
    $_SERVER['REQUEST_URI'];

    $webp = 'no_webp';

    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browsers = ['Chrome', 'Firefox', 'Opera', 'Edge'];

    foreach ($browsers as $browser) {
        if (stripos( $user_agent, $browser) !== false) {
             $webp = 'webp_support';
        }
    }
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-M0T2DWK1Z5"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-M0T2DWK1Z5');
            gtag('config', 'AW-755661519');
        </script>

        <script>
            gtag('config', 'AW-755661519/XmrZCPOLl6sYEM_1qegC', {
                'phone_conversion_number': '847-393-3733'
            });
        </script>

        <meta charset="utf-8">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
        <link rel="canonical" href="{{ $canonical }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maximum Plumbing - @yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="copyright" content="Maximum Plumbing, Inc.">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <link rel="alternate" href="{{ $canonical }}" hreflang="en-us">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
        <meta property="og:title" content="Maximum Plumbing - @yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:image" content="{{ asset('images/local-plumber-residential-plumbing-services-lake-zurich-il700x700.jpg')}}">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="700">
        <meta property="og:image:height" content="700">
        <meta property="og:url" content="{{ $canonical }}">
        <meta property="og:type" content="website">
        <meta name="geo.region" content="US-IL">
        <meta name="geo.placename" content="{{ $location['city_state'] ?? 'Lake Zurich, IL' }}">
        <meta name="geo.position" content="{{ $location['geo_tags']['position'] ?? '41.389776; -81.441226'}}">
        <meta name="ICBM" content="{{ $location['geo_tags']['ICBM'] ?? '41.389776, -81.441226' }}">

        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-5.1.1-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/maxplumbing.css?v=1.0.92') }}">

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Maximum Plumbing, Inc.",
            "logo": "https://maximumplumbing.net/images/local-plumber-lake-zurich-il-maximum-plumbing-logo300.png",
            "image": "https://maximumplumbing.net/images/local-plumber-residential-plumbing-services-lake-zurich-il700x700.jpg",
            "@id": "https://maximumplumbing.net",
            "url": "https://maximumplumbing.net",
            "telephone": "(847) 393-3733",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "23474 N Garden Ln",
                "addressLocality": "Lake Zurich",
                "addressRegion": "IL",
                "postalCode": "60047",
                "addressCountry": "USA"
            },
            "priceRange": "$",
            "sameAs": [
                "https://www.facebook.com/maximumplumbinginc",
                "https://www.yelp.com/biz/maximum-plumbing-lake-zurich-2",
                "https://www.instagram.com/maximumplumbinginc",
                "https://www.youtube.com/channel/UCHR2UV7hjM71ckQAniOv1uA"
            ],
            "areaServed": {
                "@type": "City",
                "name": "Lake Zurich, IL"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                  "Monday",
                  "Tuesday",
                  "Wednesday",
                  "Thursday",
                  "Friday",
                  "Saturday",
                  "Sunday"
                ],
                "opens": "07:00",
                "closes": "20:00"
            },
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Drain &amp; Plumbing Services",
                "itemListElement": [
                    {
                        "@type": "OfferCatalog",
                        "name": "Plumbing Services",
                        "itemListElement": [
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Pipe Leak Detection and Repair"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Water Heater Installation"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Sump Pump Installation"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Garbage Disposal Installation"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Water Filtration System (RO) Installation"
                                }
                            }
                        ]
                    },
                    {
                        "@type": "OfferCatalog",
                        "name": "Main Sewer Line Cleaning Services",
                        "itemListElement": [
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Sewer Line Camera Inspection"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Sewer Line Clog Removal"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Sewer Main Line Rodding"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Sewer Line Hydro Jetting"
                                }
                            }
                        ]
                    },
                    {
                        "@type": "OfferCatalog",
                        "name": "Drain Cleaning Services",
                        "itemListElement": [
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Drain Camera Inspection"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Drain Cleaning and Rodding"
                                }
                            },
                            {
                                "@type": "Offer",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Drain Clog Removal"
                                }
                            }
                        ]
                    }
                ]
            }
        }
        </script>
    </head>
    <body>
        <div class="modal fade" id="covidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Our efforts to stop <b>COVID-19</b></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="covid_notice">
                            <p>
                                We follow and implement all the CDC recommendations to protect our customers and stop the spread of COVID-19.
                            </p>
                            <br>
                            <ul class="table_list">
                                <li>
                                    <span class="icon_cell">
                                        <img class="icon_image" src="{{ asset('images/covid-local-plumber-lake-zurich-temp-check.png')}}" alt="Covid-19 Prevention" title="Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}" />
                                    </span>
                                    <span class="text_cell">We perform frequent temperature checks for all our employees throughout the day.</span>
                                </li>
                                <li>
                                    <span class="icon_cell">
                                        <img class="icon_image" src="{{ asset('images/covid-local-plumber-lake-zurich-masks.png')}}" alt="Covid-19 Prevention" title="Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}" />
                                    </span>
                                    <span class="text_cell">All our plumbers wear protective gear including masks, gloves, and shoe covers.</span>
                                </li>
                                <li>
                                    <span class="icon_cell">
                                        <img class="icon_image" src="{{ asset('images/covid-local-plumber-lake-zurich-sanitizer.png')}}" alt="Covid-19 Prevention" title="Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}" />
                                    </span>
                                    <span class="text_cell">Our trucks and plumbers are equipped in hand sanitizers and disinfecting wipes.</span>
                                </li>
                                <li>
                                    <span class="icon_cell">
                                        <img class="icon_image" src="{{ asset('images/covid-local-plumber-lake-zurich-protection.png')}}" alt="Covid-19 Prevention" title="Local Plumber in {{ $location['city_state'] ?? 'Lake Zurich, IL' }}" />
                                    </span>
                                    <span class="text_cell">We re-schedule appointments for any customers who exhibit Covid-19 symptoms.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main_container" class="container-fluid {{ $webp }}" itemscope itemtype="https://schema.org/LocalBusiness">

            <!-- Button trigger modal -->
            <button type="button" id="notice_button" data-bs-toggle="modal" data-bs-target="#covidModal">
                Read our important <span class="text_red">COVID-19</span> Notice
            </button>

            @include('includes.header')
            @yield('content')
            @include('includes.footer')

        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{ asset('bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/slick.min.js')}}"></script>
        <script src="{{ asset('js/maxplumbing.js?v=1.0.30')}}"></script>
    </body>

</html>
