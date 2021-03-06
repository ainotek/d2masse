<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MassValidateRequest extends FormRequest
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
            'start_at' => 'required',
            'start_day' => 'required',
            'parish_id' => 'required',
            'request_closed_at' => 'required',
        ];
    }
}
