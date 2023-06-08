<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'name'      => ['required', 'max:255'],
            'email'     => ['required', 'min:8', 'email', Rule::unique(User::class, 'email')],
            'password'  => ['required', 'confirmed']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'         => 'Name is required.',
            'name.max'              => 'Name should be maximum of 255.',
            'email.required'        => 'Email is required.',
            'email.unique'          => 'Email is already exists.',
            'email.email'           => 'Email must be vaild.',
            'password.required'     => 'Please enter your password.',
            'password.min'          => 'Password must be minimun of 8 characters.',
            'password.confirmed'    => 'Password does not match.',
        ];
    }
}
