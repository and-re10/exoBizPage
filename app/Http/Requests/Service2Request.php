<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Service2Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "description" => "required|min:5|max:100"
        ];
    }

    public function messages()
    {
        return [
            "description.required" => "La description est requise"
            "description.min" => "Minimum, 5 caractères"
            "description.required" => "Maximum, 100 caractères"
        ];
    }
}
