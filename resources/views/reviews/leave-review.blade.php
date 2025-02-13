@extends('app')

@section('title', 'Feedback For Lake Zurich Plumbers')

@section('description', 'Local reviews for local plumber near Lake Zurich, IL. We offer professional drain and plumbing service near Lake Zurich, IL.')

@section('content')

    <div id="leave_review_page" class="interior_page">
        <section class="section_row py-3">
            <div class="content_wrap">
                <h1 class="section_heading mb-2">Not On Google? Leave Your Review Here</h1>
                <p class="text-center paragraph_heading fs-5">Let us and the others know how we are doing!</p>
                <br>
                <div class="row">
                    <div class="flex-column col-lg-9 mx-auto text-center">
                        <div class="feedback_panel">
                            <h3 class="form_heading">Local Plumbing Services</h3>
                            <div class="image_wrap">
                                <img class="content_image image150" src="{{asset('images/stars-five-hand-ake-zurich-il.png')}}"
                                     alt="5 Star Plumber Near Lake Zurich IL" title="Local Plumber near Lake Zurich, IL">
                            </div>
                            <br />
                            <div class="review_form_wrap">
                                <p class="block_heading review_heading">Are You Our Customer? Please Give Us Your Feedback!</p>

                                <form id="feedbackForm" class="review_form needs-validation" method="post" action="{{ url('feedback-preview') }}" novalidate>
                                    @csrf
                                    <div class="row gy-2 gx-2">
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="review_name" name="review_name" placeholder="Name" />
                                            <span class="invalid-feedback">{{ 'please provide your name' }}</span>
                                            @error('review_name')
                                                <p class="php_form_error">{{ 'please provide your name' }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <input type="email" class="form-control" id="review_email" name="review_email" placeholder="Email" />
                                            <span class="invalid-feedback">{{ 'please provide your valid email address' }}</span>
                                            @error('review_email')
                                                <p class="php_form_error">{{ 'please provide your valid email address' }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <select id="city_options" name="city_options" class="form-control">
                                                @foreach(config('app.city_list') as $city)
                                                    @if($city == $location['city_state'])
                                                        <option value="{{$city}}" default selected>{{$city}}</option>
                                                    @else
                                                        <option value="{{$city}}">{{$city}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select id="service_options" name="service_options" class="form-control">
                                                <option value="" default>Select type of service provided</option>
                                                <option value="Plumbing Services">Plumbing Services</option>
                                                <option value="Water Leak Repair">Water Leak Repair</option>
                                                <option value="Gas Leak Detection &amp; Repair">Gas Leak Detection &amp; Repair</option>
                                                <option value="Kitchen/ Bathroom Plumbing">Kitchen/ Bathroom Plumbing</option>
                                                <option value="Water Heater Service">Water Heater Service</option>
                                                <option value="Sump Pump Service">Sump Pump Service</option>
                                                <option value="Garbage Disposal">Garbage Disposal</option>
                                                <option value="Drain Cleaning Service">Drain Cleaning Service</option>
                                                <option value="Main Line Rodding Service">Main Line Rodding Service</option>
                                            </select>
                                            <span class="invalid-feedback">{{ 'please select service provided' }}</span>
                                            @error('service_options')
                                                <p class="php_form_error">{{'please select service provided'}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-12 mt-0">
                                            <input type="text" name="subject" id="subject" placeholder="Subject">
                                            @if ($errors->has('subject'))
                                                <div class="alert alert-danger mt-2 mb-0">
                                                    {{ $errors->first('subject') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" id="review_message" name="review_message" placeholder="Your Review / Feedback" rows="5"></textarea>
                                            <span class="invalid-feedback">{{ 'your review should contain between 10 and 1000 characters' }}</span>
                                            @error('review_message')
                                                <p class="php_form_error">{{ 'your review should contain between 10 and 1000 characters' }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <p class="text-center fw-bold mb-1">Give Us Your Honest Rating</p>
                                    <div class="row" aria-label="Rating Stars">
                                        <div class="col-sm-12 rating_stars">
                                            <input type="radio" name="rating" class="star_1" id="star_1" value="1"/><label id="1" for="star_1"></label><input type="radio" name="rating" class="star_2" id="star_2" value="2"/><label id="2" for="star_2"></label><input type="radio" name="rating" class="star_3" id="star_3" value="3"/><label id="3" for="star_3"></label><input type="radio" name="rating" class="star_4" id="star_4" value="4"/><label id="4" for="star_4"></label>
                                            <input type="radio" name="rating" class="star_5" id="star_5" value="5" /><label id="5" for="star_5"></label>
                                        </div>
                                        <span class="rating_error invalid-feedback">{{ 'please give us honest rating' }}</span>
                                        @error('rating')
                                            <p class="php_form_error">{{ 'please give us honest rating' }}</p>
                                        @enderror
                                    </div>
                                    <div class="row gx-2">
                                        <div class="col-12 button_wrap pt-1">
                                            <input type="hidden" name="formLoadTime" value="{{ \Carbon\Carbon::now()->timestamp }}">
                                            @if ($errors->has('formLoadTime'))
                                                <div class="alert alert-danger mb-2">
                                                    {{ $errors->first('formLoadTime') }}
                                                </div>
                                            @endif
                                            <button type="submit" class="custom_button">PREVIEW BEFORE POSTING</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
    </div>
@endsection