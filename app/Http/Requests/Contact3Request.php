<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contact3Request extends FormRequest
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
            "name" => "required|min:5|max:50",
            "email" => "required|min:5|max:50",
            "subject" => "required|min:5|max:100",
            "message" => "required|min:5",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Le nom est requis",
            "name.min" => "Minimum, 5 caractères",
            "name.max" => "Maximum, 50 caractères",

            "email.required" => "L'email est requis",
            "email.min" => "Minimum, 5 caractères",
            "email.max" => "Maximum, 50 caractères",

            "subject.required" => "Le sujet est requis",
            "subject.min" => "Minimum, 5 caractères",
            "subject.max" => "Maximum, 100 caractères",

            "message.required" => "Le message est requis",
            "message.min" => "Minimum, 5 caractères",

        ];
    }
}
