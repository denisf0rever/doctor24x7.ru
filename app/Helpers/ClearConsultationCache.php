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
	
    public static function clear($object) {
		
		if (is_object($object)) {
			$like_comment = $object->comment_id;
			$comment = Comment::find($like_comment);
		
			$consultation = Consultation::query()
				->where('id', $comment->comment_id)
				->first();
			
			$slug = $consultation->slug;
			self::clearConsultationCache($slug);
		}
		
		return response()->json(['message' => 'Возникла ошибка в ' . __CLASS__]);
    }
}