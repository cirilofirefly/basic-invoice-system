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
                'invoice_number'    => ['required'],
                'invoice_date'      => ['required', 'date'],
                'customer_name'     => ['required', 'string'],
                'product_name.*'    => ['required', 'string'],
                'total_amount'      => ['required', 'string'],

            ] : 
            [
                'invoice_number'    => ['required'],
                'invoice_date'      => ['required', 'date'],
                'customer_name'     => ['required', 'string'],
                'product_name.*'    => ['required', 'string'],
                'total_amount'      => ['required', 'string'],
            ];

        return $rules;
    }

    public function messages(): array
    {
        return [
            'invoice_number.required' => 'Invoice Number is required',
            'invoice_date.required'   => 'Invoice Date is required',
            'customer_name.required'  => 'Customer Name is required',
        ];
    }
}
