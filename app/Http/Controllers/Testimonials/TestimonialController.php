<?php

namespace App\Http\Controllers\Testimonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BreadcrumbService;
use App\Models\Testimonials\Testimonial;
use App\Models\Consultation\ConsultationComment;

use Illuminate\Support\Facades\DB;
class TestimonialController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
    public function index()
	{
		$testimonials = Testimonial::with(['doctor', 'consultation:id,title,created_at'])->select('comment_id', 'username', 'description', 'user_id', 'created_at')
			->limit(50)
			->orderBy('created_at', 'desc')
			->get();
			
		$allTestimonials  = Testimonial::select('id')->get();
		
		$this->breadcrumbService->add('testimonials_index', 'Отзывы о нас', route('consultation.testimonials'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('testimonials_index');
		
		return view('consultation.testimonials.index', compact('breadcrumbs', 'testimonials', 'allTestimonials'));
	}
}
