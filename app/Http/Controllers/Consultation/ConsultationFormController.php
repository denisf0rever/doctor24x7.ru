<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Consultation\ConsultationCategory as Category;
use App\Services\ConsultationService;
use App\Http\Requests\ConsultationRequest;
use App\Events\ConsultationCreated;
use App\Services\BreadcrumbService;

class ConsultationFormController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
    public function form()
    {
		$categories = Category::select('id', 'short_title')->get();
		
		$this->breadcrumbService->add('form_consultation', 'Задать вопрос', route('consult.form'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('form_consultation');

		return view('consultation.form', compact('categories', 'breadcrumbs'));
    }
	
	// Создание консультации
	public function create(ConsultationRequest $request, ConsultationService $service)
    {
		$consultation = $service->create($request->validated());

		if (is_object($consultation)) {
			
			$data = [
				'name' => $request->username,
				'email' => $request->email,
				'consultation_id' => $consultation->id
			];
		
			if ($request->hasFile('images')) {
				 foreach ($request->file('images') as $file) {
					$file->store('consultation'); // Папка, куда будут сохраняться файлы
					
				$imagePath = $file->store('consultation');
				$consultationImage = Str::of($imagePath)->basename();
				$images['avatarImage'] = $consultationImage;
				}
			}
			
			//\Log::info('Dispatching ConsultationCreated event', $data);
			
			ConsultationCreated::dispatch($data);
			return redirect()->route('payment.consultation', $consultation->id)->with('success', 'Консультация добавлена');		
			
		} else {
			return redirect()->back()
               ->withInput()
			   ->with('error', 'Какая-то ошибка при добавлении');
		}
    }
}
