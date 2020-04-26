<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contact2Request extends FormRequest
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
            
            "titreAddress" => "required|min:5|max:30",
            "address" => "required|min:5|max:100",

            "titreEmail" => "required|min:5|max:30",
            "email" => "required|min:5|max:100",

            "titrePhone" => "required|min:5|max:30",
            "phone" => "required|min:5|max:100",

        ];
    }

    public function messages()
    {
        return [
            "titreAddress.required" => "Le Titre est requis",
            "titreAddress.min" => "Minimum, 5 caractères",
            "titreAddress.max" => "Maximum, 100 carctères",

            "address.required" => "required|min:5|max:100",
            "address.min" => "Minimum, 5 caractères",
            "address.max" => "Maximum, 100 carctères",

            "titreEmail.required" => "Le Titre est requis",
            "titreEmail.min" => "Minimum, 5 caractères",
            "titreEmail.max" => "Maximum, 100 carctères",

            "email.required" => "required|min:5|max:100",
            "email.min" => "Minimum, 5 caractères",
            "email.max" => "Maximum, 100 carctères",

            "titrePhone.required" => "Le Titre est requis",
            "titrePhone.min" => "Minimum, 5 caractères",
            "titrePhone.max" => "Maximum, 100 carctères",

            "phone.required" => "required|min:5|max:100",
            "phone.min" => "Minimum, 5 caractères",
            "phone.max" => "Maximum, 100 carctères",

        ];
    }
}
