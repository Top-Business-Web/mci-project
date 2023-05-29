<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSetting extends FormRequest
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
            'logo' => 'nullable',
            'sliders' => 'nullable|array',
            'title_ar' => 'required',
            'title_en' => 'required',
            'year_of_experince' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address_ar' => 'required',
            'address_en' => 'required',
            'linked_in' => 'required',
            'youtube' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'terms_conditions' => 'required',
            'shipping_policy' => 'required',
            'returns' => 'required',
            'work_date' => 'required',
            'location' => 'required',
        ];
    }
}
