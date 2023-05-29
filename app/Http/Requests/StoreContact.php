<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'services' => 'required',
            'message' => 'required',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Please Enter Your Name',
            'email.required' => 'Filed, Email almost be valid',
            'phone.required' => 'phone must be valid number',
            'services.required' => 'services must be selected',
        ];
    }
}
