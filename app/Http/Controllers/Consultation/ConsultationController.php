<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\ConsultationCategory as Category;
use App\Http\Requests\ConsultationRequest;
use App\Services\ConsultationService;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
	public function dashboard()
	{
		$consultations = Consultation::query()
			->where('is_payed', true)
			->orderBy('created_at', 'desc')
            ->take(100)
            ->get();
			
		$totalConsultations = Consultation::count();
		$totalAnswers = 1000;
		
		return view('dashboard.consultation.list', compact('consultations', 'totalConsultations', 'totalAnswers'));
	}
	
	// Просмотр консультации в панели
	
    public function show(string $id)
    {
        $consultation = Consultation::query()
            ->where('id', $id)
            ->firstOrFail();
		
		return view('dashboard.consultation.item', compact('consultation'));
    }
	
    public function index()
    {
		return view('consult.list');
    }

    public function form()
    {
		$categories = Category::all();
		
		return view('consult.form', compact('categories'));
    } 
	
	public function create(ConsultationRequest $request, ConsultationService $service)
    {
		
		$consultation = $service->create($request->validated());
		
		dump($consultation);
    }

	// Просмотр консультации в паблике
	
    public function consultation(string $id)
    {
		$consulta = Post::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$this->incrementView($id);
		
		return view('articles.item', compact('article', 'date'));
    }

    public function edit(string $id)
    {
        //
    }

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
