<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlider extends FormRequest
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
        // dd(request()->all());
        return [
            'image_about' => 'nullable|image',
            'image_services' => 'nullable|image',
            'image_product' => 'nullable|image',
            'image_faqs' => 'nullable|image',
            'image_project' => 'nullable|image',
        ];
    }
}
