<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'sz_firstname' => 'required|string|max:255',
            'sz_lastname' => 'required|string|max:255',
            'sz_email' => 'required|email|max:255',
            "sz_phone" => "required",
            'whichform' => "required",
        ];
    }

    public function messages(): array
    {
        return [
            'sz_firstname.max' => 'The First name field must not be greater than 255 characters.',
            'sz_lastname.max' => 'The Last name field must not be greater than 255 characters.',
            'sz_email.max' => 'The Email field must not be greater than 255 characters.',
        ];
    }
}
