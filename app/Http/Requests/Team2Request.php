<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Team2Request extends FormRequest
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
            "name" => "required|min:5|max:30",
            "job" => "required|min:5|max:30",
            "url1" => "nullable",
            "url2" => "nullable",
            "url3" => "nullable",
            "url4" => "nullable",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Le nom est requis",
            "name.min" => "Minimum, 5 caractères",
            "name.max" => "Maximum, 30 caractères",

            "job.required" => "Le job est requis",
            "job.min" => "Minimum, 5 caractères",
            "job.max" => "Maximum, 30 caractères",

        ];
    }
}
