<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        if (request()->isMethod('post')) {
            return [
                'brand_name' => 'required|string|max:258',
                'brand_desc' => 'required|string',
                'img' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ];
        } else {
            return [
                'brand_name' => 'required|string|max:258',
                'brand_desc' => 'required|string',
                'img' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return [
                'brand_name' => 'required|string|max:258',
                'brand_desc' => 'required|string',
                'img' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ];
        } else {
            return [
                'brand_name' => 'required|string|max:258',
                'brand_desc' => 'required|string',
                'img' => 'required|image|mimes:png,jpg,jpeg|max:2048',

            ];
        }
    }
}
