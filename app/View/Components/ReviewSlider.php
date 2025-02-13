<?php

namespace App\View\Components;

use App\Models\Review;
use Illuminate\View\Component;

class ReviewSlider extends Component {

    public String $location;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($location) {
        $this->location = $location;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {

        $reviewsData = Review::where('approved', 1)->orderBy('created_at', 'desc')->get();
        $numOfReviews = count($reviewsData);

        $data = [
            'reviews' => $reviewsData,
            'numOfReviews' => $numOfReviews,
            'avgRating' => $this->calculateAverageRating()
        ];

        return view('components.review-slider')->with('data', $data);
    }

    private function calculateAverageRating() {

        $reviews = Review::where('approved', 1)->get();
        $avgRating = 0;

        if ($reviews && count($reviews) > 0) {

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
