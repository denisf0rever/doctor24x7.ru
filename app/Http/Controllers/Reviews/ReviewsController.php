<?php

namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews\Reviews;
use App\Services\TelegramBot\TelegramNotifier;

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
			'user_id' => $request->specialist_id,
			'username' => $request->username,
			'comment_id' => $request->comment_id,
			'consultation_answer_id' => $request->answer_id,
			'email' => 'predlozhi@bk.ru',
			'rating' => $request->review_rating,
			'description' => $request->review_description,
		]);
		
		if ($review) {
			 
			 $notifier = new TelegramNotifier('Отзыв добавлен');
			 $notifier->notify(); 
			 
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
