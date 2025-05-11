<?php

namespace App\Services\Cached;

use Illuminate\Support\Facades\Cache;
use App\Models\Config\Config;

final class CachedConfig
{
	public static function getCachedConfig(string $setting)
	{
		$config = new Config();
		
		$setting = Cache::remember('setting_' . $setting, 2592000, fn() => $config->canAdminNotify());
			
		return $setting;
	}
}
