<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Reviews') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-6 shadow-xl sm:rounded-lg text-center">

                <h1 class="font-semibold text-xl text-black leading-tight mb-6">{{ $hello }}</h1>
                <section id="manage_reviews_row" class="row">
                    <div id="reviews_panel_wrap" class="col-sm-12 column">

                        <div id="reviews_wrap">
                            <div class="utility_row">
                                {{ $reviews->links() }}
                            </div>
                            <div class="row">
                                @foreach($reviews as $rev)
                                    <div class="col-lg-6 px-0">
                                        <div class="review_panel">
                                            <p class="review_top">
                                                <span class="date_display">Posted on: {{ date_format( date_create($rev->created_at), 'm-d-Y') }}</span>
                                                <span class="review_stars">
                                                    @for($i = 1; $i <= $rev->rating; $i++)<img class="icon_image" src="{{asset('images/star-best-plumber-lake-zurich-il.png')}}" title="Local Plumber near {{ $rev->location }}" alt="Maximum Plumber Star {{$i}}" />@endfor
                                                    <span class="rating_number" itemprop="ratingValue">{{ number_format($rev->rating, 1) }}</span>
                                                </span>
                                            </p>
                                            <h3 class="paragraph_heading fs-6 text-start">{{ $rev->service_type}}</h3>
                                            <p class="review_body">{{ $rev->review_content }}</p>
                                            <p class="name_display">- {{ $rev->customer->customer_name }}</p>

                                            <div class="button_bar">
                                                <div class="table_display">
                                                    <div class="table_cell">
                                                        @if(!$rev->approved)
                                                            <form class="button_form" method="post" action="approve-review">
                                                                @csrf
                                                                <button type="submit" class="custom_button control_button black" id="enableReviewBtn{{$rev->id}}" name="approve_id" value="{{$rev->id}}">
                                                                    Approve
                                                                </button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                    <div class="table_cell">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="custom_button control_button" data-bs-toggle="modal" data-bs-target="#deleteReviewModal{{$rev->id}}" value="{{$rev->id}}">
                                                            Delete
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="deleteReviewModal{{$rev->id}}" tabindex="-1" aria-labelledby="deleteReviewModalLabel{{$rev->id}}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-uppercase fs-5 fw-bold" id="deleteModalLabel{{$rev->id}}">Confirm Review Delete</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body pt-4 pb-5">
                                                                        Are you sure you want to delete the review from <br>{{ $rev->customer->customer_name }}?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="custom_button control_button black" data-bs-dismiss="modal">Close</button>
                                                                        <form class="button_form" method="post" action="delete-review">
                                                                            @csrf
                                                                            <button type="submit" class="custom_button control_button" id="deleteReviewBtn{{$rev->id}}" name="deleteReviewBtn" value="{{$rev->id}}">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="utility_row">
                                {{ $reviews->links() }}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
