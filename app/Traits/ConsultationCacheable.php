<?php 

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait ConsultationCacheable
{
	private const CACHE_KEYS = [
        'consultation' => 'consultation_',
        'discussion' => 'discussion_',
        'content' => 'content_'
    ];
	
	public function clearConsultationCache($slug, ?bool $clearDiscussion = false, ?bool $clearContent = false)
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
}