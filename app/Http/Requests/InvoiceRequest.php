<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InvoiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = $this->method('post') ? 
            [
                'invoice_number' => [],
                'invoice_number' => [],
                'invoice_number' => [],
            ] : 
            [
                
            ];

        return $rules;
    }

    public function messages(): array
    {
        return [
            'email.required'    => 'Please enter your email.',
            'email.exists'      => 'Email does not exists.',
            'email.email'       => 'Email must be vaild.',
            'password.required' => 'Please enter your password.',
        ];
    }
}
