<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\SellerFeature;
use App\Models\SellerReview;

class SellerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seller = new Seller();
        $seller = $seller->find($id);
        $seller_feature = new SellerFeature();
        $features = $seller_feature->where('seller_id', $id)->get();
        $seller_review = new SellerReview();
        $reviews = $seller_review->where('seller_id', $id)->get();

        $related_sellers = $seller->where('id', '!=', $id)
            ->inRandomOrder()
            ->take(8)
            ->get();

        return view('seller.show', [
            'seller' => $seller,
            'features' => $features,
            'reviews' => $reviews,
            'related_sellers' => $related_sellers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
