<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerSkill extends Model
{
    use HasFactory;

    protected $table = 'seller_skill';

    protected $fillable = [
        'seller_id', 'name', 'years_of_experience', 'created_at', 'updated_at'
    ];

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }
}
