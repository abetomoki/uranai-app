<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerCareer extends Model
{
    use HasFactory;

    protected $table = 'seller_career';

    protected $fillable = [
        'seller_id', 'name', 'period', 'created_at', 'updated_at'
    ];

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }
}
