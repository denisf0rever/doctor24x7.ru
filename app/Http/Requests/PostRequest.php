<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['required', 'string', 'max:255'],
            'metadescription' => ['required', 'string', 'max:255'],
            'metakeys' => ['required', 'string', 'max:255'],
            'authorID' => ['required', 'integer', 'max:5'],
            'reading-time' => ['required', 'integer', 'max:3'],
            'category' => ['required', 'integer', 'max:2'],
            'short-text' => ['required', 'string'],
            'full-text' => ['required', 'string'],
        ];
    }
}
