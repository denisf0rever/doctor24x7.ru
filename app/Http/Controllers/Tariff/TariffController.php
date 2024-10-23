<?php

namespace App\Http\Controllers\Tariff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tariff\Tariff;

class TariffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tariffs = Tariff::query()
			->orderBy('id', 'desc')
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
        $tariff = Tariff::query()
			->where('id', $id)
			->firstOrFail();
			
		return view('dashboard.tariff.edit', compact('tariff'));
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
