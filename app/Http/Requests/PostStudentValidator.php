<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStudentValidator extends FormRequest
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
            'code'=>'required',
            'name'=>'required',
            'lastname'=>'required',
            'sexe'=>'required',
            'lieu_naissance'=>'required',
            'adresse'=>'required'
        ];
    }
}
