<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'cli_name' => 'required|max:100',
            'cli_cpf' => 'required|unique:clients,cli_cpf,'.$this->route('client')->id.'', 
            'cli_phone' => 'required|unique:clients,cli_phone,'.$this->route('client')->id.'',
            'cli_email' => 'nullable|email'
        ];
    }
}
