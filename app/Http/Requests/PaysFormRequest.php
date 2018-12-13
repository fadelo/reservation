<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaysFormRequest extends FormRequest
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
            'name'=>'required|min:4|max:15',
        ];
    }
/*
    public function messages()
    {
        return [
            'required'=>'Ce champs est requis',
            'min:4'=>'Le nom semble être trop court',
            'max:15'=>'15 caractères sont réservés pour ce champs'
            'unique'=>'Ce pays existe déja dans la base'
        ];
    
    }
    */
}
