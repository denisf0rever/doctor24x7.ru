<?php

namespace App\Http\Requests\Chat;

use Illuminate\Foundation\Http\FormRequest;

class ChatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
	{
		return [
			'user_id' => 'required|integer',
			'email' => 'required|string'
		];
	}
}
