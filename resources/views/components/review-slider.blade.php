@if (count($data['reviews']) == 0 )
    <div class="review_panel"><p class="first_feedback text-center"><em>you can be the first one to leave a review for us</em></p></div>
@else
    <div class="review_slider_widget">
        <div>
            <h3 class="aggragateRatingNote paragraph_heading text-center fs-5" itemscope itemprop="aggregateRating" itemtype="https://schema.org/AggregateRating">
                <span itemprop="name">Maximum Plumbing, Inc. </span> in <u class="d-inline-block">{{ $location }}</u> is rated
                <span class="average" itemprop="ratingValue" content="{{ $data['avgRating'] }}">{{ number_format($data['avgRating'], 1) }}</span> / <span itemprop="bestRating" class="best">5</span> based on
                <span itemprop="reviewCount" class="votes">{{ $data['numOfReviews'] }}</span> local reviews
            </h3>
        </div>
        <div {{ $attributes->merge(['class'=> 'review_slider slick-slider']) }}>
            @foreach($data['reviews'] as $rev)
                <div class="slick_item">
                    <div class="testimonial_wrap" itemprop="review" itemscope itemtype="https://schema.org/Review">
                        <p class="review_top d-flex align-items-center justify-content-center">
                            <span class="reviewer" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                <span itemprop="name" class="d-inline-block">{{ $rev->customer['customer_name'] }}</span>
                            </span>
                            <span class="rating d-flex align-items-center" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                <span class="rating_number" itemprop="ratingValue">{{ number_format($rev->rating, 1) }}</span>
                                <span class="starDisplay d-flex align-items-center">
                                    @for($i = 1; $i <= $rev->rating; $i++)<img class="icon_image" width="20" height="20" src="{{asset('images/star-best-plumber-lake-zurich-il.png')}}" title="Local Plumber near {{ $rev['location'] }}" alt="Local Plumber Star {{ $i }}" />@endfor
                                </span>
                            </span>
                            {{--  <span class="date_display">Posted on: <span>{{ date_format( date_create($rev['created_at']), 'm-d-Y') }}</span></span>--}}
                        </p>
                        <p class="paragraph_heading">
                            <span itemprop="name">{{ $rev['service_type'] }} in {{ $rev['location'] }}</span>
                        </p>
                        <div class="testimonial_content mb-4">
                            <p itemprop="description">{{ $rev['review_content'] }}</p>
                        </div>
                        <h4 class="m-0 text-center fs_13 bottom_heading">Your Trusted Local Plumber <span class="d-inline-block">{{ $location }}</span></h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif