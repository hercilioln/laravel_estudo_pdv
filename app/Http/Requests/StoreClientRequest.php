<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'cli_name' => 'required|max:100',
            'cli_cpf' => 'required|unique:clients', 
            'cli_phone' => 'required|unique:clients',
            'cli_email' => 'nullable|email'
        ];
    }
}
