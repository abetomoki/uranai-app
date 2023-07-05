<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerReview extends Model
{
    use HasFactory;

    protected $table = 'seller_review';

    protected $fillable = [
        'seller_id', 'review', 'created_at', 'updated_at'
    ];

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }

}
