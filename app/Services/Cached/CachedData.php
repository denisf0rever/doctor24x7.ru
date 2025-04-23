<?php

namespace App\Services\Cached;

use App\Models\Consultation\ConsultationComment as Comment;
use App\Models\Consultation\Consultation;
use Illuminate\Support\Facades\Cache;
use App\Models\Consultation\Discussion;

final class CachedData
{
	public static function getCachedDiscussions(int $subrubric_id)
	{
		$discussions = Cache::remember('discussions_' . $subrubric_id, 2592000, fn() => Discussion::where('subrubric_id', $subrubric_id)
			->select('title', 'comment_id')
			->get()
			);
			
		return $discussions;
	}
}
