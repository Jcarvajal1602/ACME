<?php

namespace ACME\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropietarioRequest extends FormRequest
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
            'first_name' => 'required|max: 10',
            'second_name' => 'required|max: 10',
            'first_last_name' => 'required|max: 10',
            'second_last_name' => 'required|max: 10',
            'city' => 'required|max: 15',
            'identification' => 'required|max: 10',
            'address' => 'required|max: 25',
            'telephone' => 'required|max: 10'
        ];
    }
}
