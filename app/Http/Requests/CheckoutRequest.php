<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            // "first_name" => "required",
            // "last_name" => "required",
            // "address" => "required",
            // "house_no" => "required",
            // "customer_name" => "required",
            // "post_code" => "required",
           "phone" => [
                'required',
                'phone:' . strtoupper($this->input('country_iso_code')), // Example: phone:GB or phone:MD
            ],
            // "is_scammers" => "max:0"
        ];
    }

    public function messages(): array
    {
        return [
            'customer_name.required' => 'Full name is required.',
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            "address.required" => "Address is required.",
            "house_no.required" => "House No is required.",
            "post_code.required" => "Post code is required.",
            "phone.required" => "Phone is required.",
            "phone.phone" => "Phone number format is invalid.",
            "is_scammers.max" => "Spam detected.",
        ];
    }
}
