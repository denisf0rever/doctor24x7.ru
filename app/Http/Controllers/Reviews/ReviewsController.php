<?php

namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews\Reviews;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $review = Reviews::create([
			'user_id' => $request->user_id,
			'rating' => $request->review_rating,
			'title' => $request->review_title,
			'description' => $request->review_description,
		]);
		
		if ($review) {
			 return true;
		} 
		
		return false;
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
        //
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
