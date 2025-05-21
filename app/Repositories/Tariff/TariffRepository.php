<?php

namespace App\Repositories\Tariff;

use App\Models\Consultation\Consultation;
use Illuminate\Support\Facades\DB;

class TariffRepository
{
	/**
	 *
	 * Получить сумму тарифа по ID консультации.
	 *
     * @param int $consultation_id
     * @return float|null
	 *
     */
	
	public static function onlySum(int $consultation_id)
	{
		$consultation = Consultation::query()
            ->where('id', $consultation_id)
			->select('id', 'rubric_id')
            ->firstOrFail();
			
		$tariff = DB::table('sf_consultation_tariff')
			->join('sf_consultation_tariff_rubric', 'sf_consultation_tariff.id', '=', 'sf_consultation_tariff_rubric.tariff_id')
			->where('sf_consultation_tariff_rubric.rubric_id', $consultation->rubric_id)
			->where('sf_consultation_tariff.is_active', true)
			->select('sum')
			->orderBy('position', 'asc')
			->first();
			
		$hasPhoto = DB::table('sf_consultation_comment_photo')
			->where('comment_id', $consultation_id)
			->count();
			
		if ($hasPhoto > 0) {
			return 1000;
		}
		
		return $tariff->sum ?? 500; 
	}
}