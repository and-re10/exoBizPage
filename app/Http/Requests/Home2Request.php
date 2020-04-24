<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Home2Request extends FormRequest
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
            // 'image' => 'required|min:5|max:100',
            'titre' => 'required|min:5|max:30',
            'description' => 'required|min:5|max:100'
        ];
    }

    public function messages()
    {
        return [
            // 'image.required' => "L'image est requise",
            // 'image.min' => "Minimum, 5 caractères",
            // 'image.max' => "Maximum, 100 caractères",

            'titre.required' => "Le titre est requis",
            'titre.min' => "Minimum, 5 caractères",
            'titre.max' => "Maximum, 30 caractères",

            'description.required' => 'La description est requise',
            'description.min' => 'Minimum, 5 caractères',
            'description.max' => 'Maximum, 100 caractères'
        ];
    }
}
