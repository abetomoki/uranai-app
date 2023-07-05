<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $table = 'seller';

    protected $fillable = [
        'nickname', 'last_login_time', 'availability_status', 'gender', 'age', 'sales_record', 'rating', 'follower_count', 'coconala_user_id', 'search_text', 'detail', 'profile_image', 'created_at', 'updated_at', 'deleted_at'
    ];

    public function features()
    {
        return $this->hasMany('App\Models\SellerFeature');
    }


    public function skills()
    {
        return $this->hasMany('App\SellerSkill');
    }

    public function qualifications()
    {
        return $this->hasMany('App\SellerQuailification');
    }

    public function scrapingCareers()
    {
        return $this->hasMany('App\SellerCareer');
    }

    public function awards()
    {
        return $this->hasMany('App\SellerAward');
    }

    public function servicies()
    {
        return $this->hasMany('App\SellerService');
    }


    public function scrapingResults()
    {
        return $this->hasMany('App\SellerScrapingResult');
    }
}
