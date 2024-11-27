<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LikeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
	
    public function rules(): array
    {
        return [
			'slug' => 'required|regex:/^[a-zA-Z0-9_]+$/|max:255',
        ];
    }
}