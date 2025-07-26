<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
	
    public function rules(): array
    {
        return [
			'payment_method' => 'required|string|in:t_bank,u_kassa,',
			'payment_purpose' => 'required|string|in:chat,consultation,balance_account'
        ];
    }
}
