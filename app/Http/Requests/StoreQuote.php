<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuote extends FormRequest
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
                'product_id' => 'required',
            // 'system_complete' => 'required',
            // 'usage' => 'required',
            // 'system_type' => 'required',
            // 'panels_place' => 'required',
            // 'your_roof' => 'required',
            // 'message' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            // 'prefer_contact' => 'required',
            'address' => 'required',
            // 'city' => 'required',
            // 'state' => 'required',
            // 'zip' => 'required',
            // 'country' => 'required',
        ];
    }
}
