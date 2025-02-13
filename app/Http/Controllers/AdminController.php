<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public $location;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Display reviews.
     */
    public function manage_reviews() {

        $reviews = $this->getAllReviews();

        $data = [
            'hello' => 'Manage Plumbing Reviews',
            'reviews' => $reviews,
        ];
        return view('admin.manage-reviews', $data);
    }

    /**
     * Get all reviews from database
     * @return Review array
     */
    public function getAllReviews() {
        return Review::orderBy('reviews.created_at', 'desc')->paginate(12);
    }

    /**
     * Approve the specific review
     * @return mixed
     */
    public function approve_review() {
        $id = request('approve_id');
        $review = Review::findOrFail($id);

    // dd(json_decode($review->update(['approved' => 1])));
        $review->update(['approved' => 1]);

        return redirect()->action([AdminController::class, 'manage_reviews']);
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function delete_review() {

        $id = request('deleteReviewBtn');
        $review = Review::findOrFail($id);

        $review->delete();

        return redirect()->action( [AdminController::class, 'manage_reviews']);
    }
}
