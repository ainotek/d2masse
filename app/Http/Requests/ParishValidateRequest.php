<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParishValidateRequest extends FormRequest
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
            'longitude' => 'nullable',
            'latitude' => 'nullable',
            'diocese_id' => 'required',
            'registration' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city_id' => 'required',
        ];
    }
}
