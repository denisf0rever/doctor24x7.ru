<?php

namespace App\Http\Controllers\Tariff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tariff\Tariff;
use App\Models\Tariff\Conditions;
use App\Models\Consultation\ConsultationCategory as Rubric;

class TariffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tariffs = Tariff::query()
			->orderBy('id', 'asc')
			->get();
			
		
		return view('dashboard.tariff.index', compact('tariffs'));
    }

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tariff = Tariff::with('rubrics')->find($id);
		
		$conditions = Conditions::query()
			->get();
		
		$rubrics = Rubric::all();
		
		return view('dashboard.tariff.edit', compact('tariff', 'conditions', 'rubrics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
			'name' => 'required|string|max:255',
			'title' => 'required|string|max:255',
			'description' => 'nullable|string',
			'description_short' => 'nullable|string',
			'answers_count' => 'nullable|integer',
			'sum' => 'nullable|numeric',
			'fee' => 'nullable|numeric',
			'condition_id' => 'nullable|integer',
			'position' => 'nullable|integer',
			'is_phone' => 'nullable|boolean',
			'is_free' => 'nullable|boolean',
			'is_checked' => 'nullable|boolean',
			'is_active' => 'nullable|boolean',
			'class' => 'nullable|string|max:255',
			
        ]);
	
		$tariff = Tariff::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$tariff->name = $request->input('name');
		$tariff->title = $request->input('title');
		$tariff->description = $request->input('description');
		$tariff->description_short = $request->input('description_short');
		$tariff->sum = $request->input('sum');
		$tariff->fee = $request->input('fee');
		$tariff->condition_id = null;
		$tariff->position = $request->input('position');
		$tariff->is_phone = $request->input('is_phone');
		$tariff->is_free = $request->input('is_free');
		$tariff->is_checked = $request->input('is_checked');
		$tariff->is_active = $request->input('is_active');
		$tariff->class = $request->input('class');
		$tariff->save();
		
		if ($tariff) {
			return redirect()->back()->with('success', 'Тариф обновлен');
		} else {
			return redirect()->back()->with('success', 'Возникла ошибка');
		}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
