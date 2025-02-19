<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
			'comment_id' => 'required|int|min:1',
			'to_answer_id' => 'int|min:1',
			'user_id' => 'required|int|min:1',
            'email' => 'required|string|max:255',
            'author_email' => 'string|max:255',
            'username' => 'required|string|max:255',
			'author_username' => 'string|max:255',
            'description' => 'required|string|min:2',
        ];
    }
}
