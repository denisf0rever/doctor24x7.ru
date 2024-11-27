<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\ConsultationComment as Comment;

final class ClearConsultationCache {
	
	private const CACHE_KEYS = [
        'consultation' => 'consultation_',
        'discussion' => 'discussion_',
        'content' => 'content_'
    ];
	
	public static function clearConsultationCache($slug, ?bool $clearDiscussion = false, ?bool $clearContent = false)
	{
		$cacheKeys = [
            self::CACHE_KEYS['consultation'] . $slug,
        ];

        if ($clearDiscussion) {
            $cacheKeys[] = self::CACHE_KEYS['discussion'] . $slug;
        }

        if ($clearContent) {
            $cacheKeys[] = self::CACHE_KEYS['content'] . $slug;
        }
		
        foreach ($cacheKeys as $key) {
            Cache::forget($key);
        }
    }
	
    public static function clear($slug): void
	{
		self::clearConsultationCache($slug);
    }
}