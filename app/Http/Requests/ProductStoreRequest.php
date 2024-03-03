<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
                'product_name' => 'required|string|max:258',
                'prod_img' => 'image|mimes:png,jpg,jpeg|max:2048',
                'product_desc' => 'max:258',
                'brand_id' => 'integer',
                'cat_id' => 'integer',
                'product_price' => 'integer',
                'dis_id' => 'integer',
                'product_cert' => 'boolean',

            ];
        } else {
            return [
                'product_name' => 'required|string|max:258',
                'prod_img' => 'image|mimes:png,jpg,jpeg|max:2048',
                'product_desc' => 'max:258',
                'brand_id' => 'required|integer',
                'cat_id' => 'required|integer',
                'product_price' => 'required|integer',
                'dis_id' => 'integer',
                'product_cert' => 'boolean',

            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return [
                'product_name.required' => 'Name is required!',
                'brand_id.required' => 'Brand is required!',
                'cat_id.required' => 'Category is required!',
                'product_price.required' => 'Price is required!',

            ];
        } else {
            return [
                'product_name.required' => 'Name is required!',
                'brand_id.required' => 'Brand is required!',
                'cat_id.required' => 'Category is required!',
                'product_price.required' => 'Price is required!',


            ];
        }
    }
}
