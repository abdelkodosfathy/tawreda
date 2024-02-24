<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountStoreRequest extends FormRequest
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
                'dis_name' => 'required|string|max:258',
                'dis_desc' => 'required|string',
                'dis_percent' => 'required|numeric|between:1,99'
            ];
        } else {
            return [
                'dis_name' => 'required|string|max:258',
                'dis_desc' => 'required|string',
                'dis_percent' => 'required|numeric|between:1,99'
            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return [
                'dis_name' => 'required|string|max:258',
                'dis_desc' => 'required|string',
                'dis_percent' => 'required|numeric|between:1,99'
            ];
        } else {
            return [
                'dis_name' => 'required|string|max:258',
                'dis_desc' => 'required|string',
                'dis_percent' => 'required|numeric|between:1,99'

            ];
        }
    }
}