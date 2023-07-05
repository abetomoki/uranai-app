<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerService extends Model
{
    use HasFactory;

    protected $table = 'seller_service';

    protected $fillable = [
        'seller_id', 'service_name', 'price', 'created_at', 'updated_at'
    ];

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }
}
