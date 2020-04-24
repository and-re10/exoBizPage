<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Service1Request extends FormRequest
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
            'icon' => 'required|min:5|max:40',
            'titre' => 'required|min:5|max:30',
            'description' => 'required|min:5|max:100',
        ];
    }

    public function messages(){
        return [
            'icon.reuired' => "L'icon est requis",
            'icon.reuired' => "Minimum, 5 caractères",
            'icon.reuired' => "Maximum, 40 caractères",
            'titre.required' => 'Le titre est requis',
            'titre.required' => 'Minimum, 5 caractères',
            'titre.required' => 'Maximum, 30 caractères',
            'description.required' => 'La description est requise',
            'description.required' => 'Minimum, 5 caractères',
            'description.required' => 'Maximum, 100 caractères',
        ];
    }
}
