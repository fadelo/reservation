<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompagnieFormRequest extends FormRequest
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
            'nom'=>'required | min:3',
            'des'=>'required|min:10',
            'rccm'=>'required',
            'ifu'=>'required',
            'tel'=>'required',
            'adr'=>'required',
            'email'=>'required',
            'bank'=>'required',
            'momo'=>'required',
            'flooz'=>'required',
            'validiter'=>'required',
            'penaliter'=>'required',
            'postPenaliter'=>'required',
            'msgAverti'=>'required',
        ];
    }
}
