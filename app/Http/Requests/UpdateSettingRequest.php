<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'phone'=> 'required',
            'email'=> 'required|email',
            'address'=> 'required|string',
            'facebook'=> 'required|url',
            'instagram'=> 'required|url',
            'youtube'=> 'required|url',
            'linkedin'=> 'required|url',
            'twitter'=> 'required|url',
        ];
    }

    public function attributes(): array
    {
        return [
            'phone'=> __('keywords.phone'),
            'address'=> __('keywords.address'),
            'email'=> __('keywords.email'),
            'facebook'=> __('keywords.facebook'),
            'twitter'=> __('keywords.twitter'),
            'linkedin'=> __('keywords.linkedin'),
            'youtube'=> __('keywords.youtube'),
            'instagram'=> __('keywords.instagram'),
            
        ];
    }
}
