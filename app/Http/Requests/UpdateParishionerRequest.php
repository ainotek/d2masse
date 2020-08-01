<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParishionerRequest extends FormRequest
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
            'email' => 'required|email|min:6',
            'first_name' => 'required|string|min:2|max:60',
            'last_name' => 'required|string|min:2|max:120',
            'phone' => 'required|string|min:8|max:14',
            'birthday' => 'required|date',
            'gender' => 'required|string|max:1',
            'parish_id' => 'required|exists:parishes,id',
            'password' => 'min:8|nullable|confirmed'
        ];
    }
}
