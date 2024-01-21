<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarFormRequest extends FormRequest
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
            'nom'=>'bail|required',
            // 'user_id'=>'bail|required',
            'categorie_id'=>'bail|required',
            'description'=>'bail|required',
            'marque_id'=>'bail|required',
            'alimentation'=>'bail|required',
            'carburant'=>'bail|required',
            'prix'=>'bail|required|numeric',
            'capacite_reservoir'=>'bail|required',
            'poids_vide'=>'bail|required',
            'nombre_usager'=>'bail|required|numeric',
            'dimensions'=>'bail|required',
            'empattement'=>'bail|required',
            'cylindre'=>'bail|required',
            'garde_sol'=>'bail|required',
            'photo'=>'bail|image|nullable|mimes:png,jpg,jpeg|max:100000',

        ];
    }
}
