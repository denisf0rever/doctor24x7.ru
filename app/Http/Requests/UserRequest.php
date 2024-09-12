<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string',
            'middle_name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
			'is_priority' => 'string',
			'is_active' => 'string',
			'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
			'webp_avatar' => 'image|mimes:webp|max:2048'
        ];
    }
}
