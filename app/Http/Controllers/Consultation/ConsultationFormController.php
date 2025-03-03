<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Consultation\ConsultationCategory as Category;
use App\Services\ConsultationService;
use App\Http\Requests\ConsultationRequest;
use App\Events\ConsultationCreated;

class ConsultationFormController extends Controller
{
    public function form()
    {
		$categories = Category::select('id', 'short_title')->get();
		
		return view('consultation.form', compact('categories'));
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
				 //foreach ($request->file('images') as $file) {
					// Сохраняем каждый файл в нужной директории
					//$file->store('consultation'); // Папка, куда будут сохраняться файлы
					
				//$imagePath = $request->file('image')->store('consultation');
				//$consultationImage = Str::of($imagePath)->basename();
				//$images['avatarImage'] = $consultationImage;
				//}
			}
			
			//\Log::info('Dispatching ConsultationCreated event', $data);
			
			ConsultationCreated::dispatch($data);
			return redirect()->route('payment.consultation', $consultation->id)->with('success', 'Консультация добавлена');		
			
		} else {
			return redirect()->back()->with('error', 'Какая-то ошибка при добавлении');
		}
    }
}
