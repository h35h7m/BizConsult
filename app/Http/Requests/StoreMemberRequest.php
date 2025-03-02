<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            'name'=> 'required|string',
            'postion'=> 'required|string',
            'facebbok'=> 'required|string',
            'twitter'=> 'required|string',
            'linkedin'=> 'required|string',
            'image'=> 'required|mimes:jpg',
            
        ];
    }

    public function attributes(): array
    {
        return [
            'name'=> __('keywords.name'),
            'postion'=> __('keywords.postion'),
            'facebook'=> __('keywords.facebook'),
            'twitter'=> __('keywords.twitter'),
            'linkedin'=> __('keywords.linkedin'),
            'image'=> __('keywords.image'),
            
            
        ];
    }
}
