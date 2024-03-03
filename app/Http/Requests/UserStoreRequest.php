<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
                'cust_name' => 'required|string|max:258',
                'telephone' => 'required|string',
                'password' => 'required|string',
                'api_token' => 'nullable'

            ];
        } else {
            return [
                'cust_name' => 'required|string|max:258',
                'telephone' => 'required|string',
                'password' => 'required|string'
                ,
                'api_token' => 'nullable'

            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return [
                'cust_name.required' => 'Name is required!',
                'telephone.required' => 'Mobile number is required!',
                'password.required' => 'password is required!'

            ];
        } else {
            return [
                'cust_name.required' => 'Name is required!',
                'telephone.required' => 'Mobile number is required!',
                'password.required' => 'password is required!'

            ];
        }
    }
}
