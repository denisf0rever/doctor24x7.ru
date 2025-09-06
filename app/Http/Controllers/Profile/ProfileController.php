<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMain;
use App\Services\BreadcrumbService;
use Carbon\Carbon;
		
class ProfileController extends Controller
{
    public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
	public function show(string $slug)
    {
		Carbon::setLocale('ru');

		$user = UserMain::query()
			->where('username', $slug)
			->firstOrFail();
		
		$user->increment('views');
		
		$dateString = $user->created_at;
		$createdAt = Carbon::parse($dateString);
		
		$date = $createdAt->translatedFormat('j F Y') . ' года';
		
		$this->breadcrumbService->add('profile_doctor', 'Просмотр профиля', route('profile.user.item', $user->username));
		
		$breadcrumbs = $this->breadcrumbService->getAll('profile_doctor');
		
		return view('user.profile.item', compact('user', 'date', 'breadcrumbs'));
    }
}
