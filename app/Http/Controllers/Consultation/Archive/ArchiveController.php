<?php

namespace App\Http\Controllers\Consultation\Archive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function show()
	{
		return view('consultation.archive.index');
	}
}
