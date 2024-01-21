<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationVoitureRequest extends FormRequest
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
             'adresse'=>'bail|required',
             'ville'=>'bail|required',
             'pays'=>'bail|required',
             'maison'=>'bail|required',
             'societe'=>'bail',
             'date_location'=>'bail|required',
             'heure_location'=>'bail|required',
             'date_location_back'=>'bail|required',
             'heure_location_back'=>'bail|required',
             'card'=>'bail|required'
        ];
    }
}
