<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            "titre" => "required|min:5|max:30",
            "description" => "required|min:5|max:30",
            "filtre" => "required|min:5|max:20",
        ];
    }

    public function messages()
    {
        return [
            "titre.required" => "Le titre est requis",
            "titre.min" => "Minimum, 5 caractères",
            "titre.max" => "Maximum, 30 caractères",

            "description.required" => "La description est requise",
            "description.min" => "Minimum, 5 caractères",
            "description.max" => "Maximum, 30 caractères",

            "filtre.required" => "Le filtre est requis",
            "filtre.min" => "Minimum, 5 caractères",
            "filtre.max" => "Maximum, 20 caractères",

        ];
    }
}
