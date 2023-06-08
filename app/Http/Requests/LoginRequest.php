<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
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
        return [
            'email'     => ['required', 'email', Rule::exists(User::class, 'email')],
            'password'  => ['required']
        ];
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
