<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use App\Models\Consultation\CategoryShowcase as Showcase;
use Illuminate\Http\Request;

class CategoryShowcaseController extends Controller
{
    public function destroy($id)
	{		
		$showcase = Showcase::findOrFail($id);
			
		$showcase->delete();
		
		return redirect()->back()->with('success', 'Элемент успешно добавлен в showcase!');
	}
}
