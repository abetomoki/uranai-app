<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerQualification extends Model
{
    use HasFactory;

    protected $table = 'seller_qualification';

    protected $fillable = [
        'seller_id', 'name', 'acquisition_date', 'created_at', 'updated_at'
    ];

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }
}
