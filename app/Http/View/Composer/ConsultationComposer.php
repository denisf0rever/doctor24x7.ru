<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Consultation\Consultation;

class ConsultationComposer
{
	public function compose(View $view)
    {
		$consultations = Cache::remember('app_consultations', 1440, fn () => Consultation::select('slug', 'title', 'answer_count')
			->with('comments')
			->where('is_payed', true)
			->orderBy('created_at', 'desc')
			->take(8)
			->get());
		
        $view->with('consultations', $consultations);
    }
}