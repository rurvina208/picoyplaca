<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RestrictionRequest extends FormRequest
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
            //
            'fecha'=>'date|required',
            'hora'=>'required',
            'letras'=>'required|min:3|max:4|alpha',
            'digitos_numericos'=>'required|min:3|max:4'
        ];
    }
}
