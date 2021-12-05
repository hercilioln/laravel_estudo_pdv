<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'cat_name' => 'required|max:80',
            'cat_description' => 'nullable|max:250'
        ];
    }

    public function messages()
    {
        return[
            'cat_name.required' => 'Este campo é obrigatório',
            'cat_name.max' => 'Limite de caracteres: 250',
            
            'cat_description.max' => 'Limite de caracteres: 250',
        ];
    }
}
