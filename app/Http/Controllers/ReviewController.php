<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Customer;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller {

    public $location;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return view('reviews.leave-review')->with('location', $this->location);
    }

    public function submitPreview() {

        request()->validate([
            'review_name'=> ['required', 'min:2', 'max:255'],
            'review_email'=> ['required', 'email', 'max:255'],
            'city_options'=> 'required',
            'service_options'=> ['required', 'min:10', 'max:255'],
            'review_message'=> ['required', 'min:10', 'max:1000'],
            'rating'=>'required'
        ]);

        $name = request('review_name');
        $email = request('review_email');
        $location = request('city_options');
        $service_type = request('service_options');
        $review_content = request('review_message');
        $rating = request('rating');

        $data = [
            'name'          => $name,
            'email'         => $email,
            'location'      => $location,
            'service_type'  => $service_type,
            'review_content'=> $review_content,
            'rating'        => $rating,
            'approved'      => 0
        ];

        // create array with customer values for db
        $customer_data = [
            'customer_name' => $name,
            'customer_email' => $email,
        ];

        if (!Customer::where('customer_email', $email)->exists()) {
            Customer::create($customer_data);
        }

        session(['review_data' => $data]);
        return redirect()->action( [ReviewController::class, 'preview']);
    }

    public function preview() {

        if(session('review_data')) {

            $data = [
                'review_data' => session('review_data')
            ];

            return view('reviews.feedback-preview', $data)->with('location', $this->location);;

        } else {
            return redirect()->action( [WelcomeController::class, 'index']);
        }
    }

    public function submitFeedback(Request $request) {

        request()->validate([
            'rating'=>'required',
            'review_name'=> ['required', 'min:2', 'max:255'],
            'review_email'=> ['required', 'email', 'max:255'],
            'city_options'=> 'required',
            'service_type'=> ['required', 'min:10', 'max:255'],
            'review_message'=> ['required', 'min:10', 'max:1000']
        ]);

        $name = request('review_name');
        $email = request('review_email');
        $location = request('city_options');
        $service_type = request('service_type');
        $review_content = request('review_message');
        $rating = request('rating');

        $current_customer = Customer::where('customer_email', $email)->first();
        $type = 'review submission';

        $review_data = [
            'review_content'    => $review_content,
            'service_type'      => $service_type,
            'location'          => $location,
            'rating'            => $rating,
            'customer_id'       => $current_customer->id
        ];

        $customer_data = [
            'customer_name' => $name,
            'customer_email' => $email,
        ];

        Review::create($review_data);
        Customer::where('id', $current_customer->id)->update($customer_data);

        $data = [
            'name'              => $name,
            'email'             => $email,
            'review_content'    => $review_content,
            'service_type'      => $service_type,
            'location'          => $location,
            'rating'            => $rating,
            'type'              => $type,
        ];

        Mail::to('getmaximumplumbing@gmail.com')->cc(['gmaxalina@gmail.com','info@maximumplumbing.net'])->bcc('eastwaywebdesign@gmail.com')->send(new SendMail($data));
//        Mail::to('eastwaywebdesign@gmail.com')->send(new SendMail($data));
        session(['success'=> 'Thank you '  .  $name . ', we really appreciate your feedback.', 'is_review' => true]);

        session()->forget('review_data');

        return redirect()->action( [ContactController::class, 'requestSubmitted']);
    }

    public function testimonials() {
        $reviews = Review::where('approved', 1)->orderBy('created_at', 'desc')->get();
        $reviewsCount = count($reviews);
        $avgRating = $this->calculateAverageRating($reviews);

        $data = [
            'reviews'       => $reviews,
            'reviewsCount' => $reviewsCount,
            'avgRating'    => $avgRating
        ];

//        dd($data);

        return view('reviews.testimonials', $data)->with('location', $this->location);
    }

    public function calculateAverageRating($reviews) {
        $avgRating = 0;

        if($reviews && count($reviews) > 0) {

            $numOfReviews = count($reviews);
            $ratingTotal = 0;

            foreach ($reviews as $rev) {
                $ratingTotal += $rev['rating'];
            }
            $avgRating = $ratingTotal / $numOfReviews;
        }

        return $avgRating;
    }
}
