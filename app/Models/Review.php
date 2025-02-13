<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Review extends Model {

    use HasFactory;

    protected $fillable = [
        'review_content',
        'service_type',
        'location',
        'rating',
        'customer_id',
        'approved',
    ];

    public function customer() {

        return $this->belongsTo(Customer::class);
    }
}
