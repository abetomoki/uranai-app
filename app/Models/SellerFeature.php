<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerFeature extends Model
{
    use HasFactory;

    protected $table = 'seller_feature';

    protected $fillable = [
        'seller_id', 'feature', 'created_at', 'updated_at'
    ];

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }
}
