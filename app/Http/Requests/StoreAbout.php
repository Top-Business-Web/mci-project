<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAbout extends FormRequest
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

//        dd(request()->all());
        return [
            'image' => 'nullable',
            'title_ar' => 'required',
            'title_en' => 'required',
            'vision_ar' => 'required',
            'vision_en' => 'required',
            'mission_ar' => 'required',
            'mission_en' => 'required',
            'goals_ar' => 'required',
            'goals_en' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
        ];
    }
}
