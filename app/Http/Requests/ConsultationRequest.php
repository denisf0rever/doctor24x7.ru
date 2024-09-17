<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationRequest extends FormRequest
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
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:10',
            'age' => 'string|max:200',
            'city_id' => 'required|string|max:255',
			'rubric_id' => 'required|string|max:100',
			'image' => 'image|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048'
        ];
    }
}
