@extends('app')

@section('title', 'Leave A Review For Maximum Plumbing')

@section('description', 'Local reviews for local plumber in Lake Zurich. We offer professional plumbing services near Lake Zurich and surrounding areas.')

@section('content')

    <div id="preview_feedback_page" class="interior_page">

        <section class="section_row pt-3">
            <div class="content_wrap">

                <h1 class="section_heading">Please, verify your feedback info</h1>

                <div class="row">
                    <div class="col-sm-12 col-lg-8 text-center column mx-auto">
                        <div class="feedback_panel">

                            <form id="revPreviewForm" class="form-horizontal reviewForm" method="post" action="{{ url('feedback-submission') }}">
                                @csrf
                                <div id="rating_preview_wrap" class="row field_wrap">
                                    <div class="col-md-4 label_column">
                                        <div class="table_display">
                                            <div class="table_cell">
                                                <label for="rating_stars" class="form_label">Your Rating: </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 field_wrap">
                                        <div id="rating_stars" class="rating_stars" aria-label="Rating Stars">
                                            <div class="rating_table">
                                                <p>{{ number_format((float)$review_data['rating'], 2) }}</p>
                                            </div>
                                            @for($i=1; $i<=5; $i++)
                                                @if($i <  $review_data['rating'])
                                                    <input type="radio" name="rating" class="star_{{ $i }}" id="star_{{ $i }}" value="{{ $i }}"/><label id="{{ $i }}" class="yellowStar" for="star_{{ $i }}"></label>
                                                @elseif($i == $review_data['rating'])
                                                    <input type="radio" name="rating" class="star_{{ $i }}" id="star_{{ $i }}" value="{{ $i }}" checked="checked"/><label id="{{ $i }}" class="yellowStar" for="star_{{ $i }}"></label>
                                                @else
                                                    <input type="radio" name="rating" class="star_{{ $i }}" id="star_{{ $i }}" value="{{ $i }}"/><label id="{{ $i }}" for="star_{{ $i }}"></label>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 label_column">
                                        <div class="table_display">
                                            <div class="table_cell">
                                                <label for="review_name" class="form_label">Your name: </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 field_wrap">
                                        <input type="text" id="review_name" name="review_name" class="form-control" placeholder="Your Name" value="{{ $review_data['name'] }}" />
                                        <span class="invalid-feedback">{{ 'please provide your name' }}</span>
                                        @error('review_name')
                                            <p class="php_form_error">{{ 'please provide your name' }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 label_column">
                                        <div class="table_display">
                                            <div class="table_cell">
                                                <label for="review_email" class="form_label">Email: </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 field_wrap">
                                        <input type="text" id="review_email" name="review_email" class="form-control" placeholder="Email" value="{{ $review_data['email'] }}" />
                                        <span class="invalid-feedback">{{ 'please provide your valid email address' }}</span>
                                        @error('review_email')
                                            <p class="php_form_error">{{ 'please provide your valid email address' }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 label_column">
                                        <div class="table_display">
                                            <div class="table_cell">
                                                <label for="service_location" class="form_label">Service location: </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 field_wrap">
                                        <select id="city_options" name="city_options" class="form-control">
                                            @foreach(config('app.city_list') as $city) {
                                                @if($city == session('review_data')['location'])
                                                    <option value="{{ $city }}" default selected>{{ $city }}</option>
                                                @else
                                                    <option value="{{ $city }}">{{ $city }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 label_column">
                                        <div class="table_display">
                                            <div class="table_cell">
                                                <label for="repair_type" class="form_label">Service provided: </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 field_wrap">
                                        <input type="text" id="service_type" class="form-control" name="service_type" value="{{ $review_data['service_type']}}" />
                                        <span class="invalid-feedback">{{ 'describe service provided in 10 or more characters' }}</span>
                                        @error('service_type')
                                            <p class="php_form_error">{{ 'describe service provided in 10 or more characters' }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 label_column">
                                        <div class="table_display">
                                            <div class="table_cell">
                                                <label for="review_message" class="form_label">You wrote: </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 field_wrap">
                                        <textarea id="review_message" name="review_message" class="form-control" contenteditable="true">{{ $review_data['review_content'] }}</textarea>
                                        <span class="invalid-feedback">{{ 'your review should contain between 10 and 1000 characters' }}</span>
                                        @error('review_message')
                                            <p class="php_form_error">{{ 'your review should contain between 10 and 1000 characters' }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8 button_wrap">
                                        <button type="submit" class="custom_button" id="saveReviewBtn" name="saveReviewBtn">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> <!--end of .page_content-->

@endsection
