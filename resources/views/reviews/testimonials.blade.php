@extends('app')

@section('title', 'Plumbing Reviews | Lake Zurich')

@section('description', 'Customer reviews for local plumber near Lake Zurich, IL. We offer professional drain and plumbing service near Lake Zurich, IL.')

@section('content')

    <div id="testimonials_page" class="interior_page">

        <section class="section_row py-3">
            <div class="content_wrap">
                <h1 class="small_heading center_text">Trusted Local Plumbers in Lake Zurich, IL and surrounding areas</h1>
                <h2 class="section_heading center_text">What local clients say about Maximum Plumbing</h2>
                <br>
                <script defer async src='https://cdn.trustindex.io/loader.js?247f29619a5d111d04066e6008d'></script>
                <br>
            </div>
        </section>

        <x-contact-bar location="{{ $location['city_state'] }}"/>

        <section class="map_section section_row">
            <div class="row map_wrapper">
                <div class="col-sm-12 column">
                    <div class="map_container">
                        <iframe class="responsive_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79525.13077034686!2d-88.07903917714661!3d42.206528550161515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fa261e28b5491%3A0x68c9371127538342!2sMaximum%20Plumbing%20inc.!5e0!3m2!1sen!2sus!4v1581630691182!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection