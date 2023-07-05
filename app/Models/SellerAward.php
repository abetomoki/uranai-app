<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerAward extends Model
{
    use HasFactory;

    protected $table = 'seller_award';

    protected $fillable = [
        'seller_id', 'award_name', 'award_date', 'created_at', 'updated_at'
    ];

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }
}
