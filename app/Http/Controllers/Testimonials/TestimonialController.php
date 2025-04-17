<?php

namespace App\Http\Controllers\Testimonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
	{
		return view('consultation.testimonials.index');
	}
}
