<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProviderRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'prv_name' => 'required|max:100',
            'prv_email' => 'required|email',
            'prv_cnpj' => 'required|cnpj|unique:providers,prv_cnpj,'.$this->route('provider')->id.'',
            'prv_phone' => 'required|max:15|unique:providers,prv_phone,'.$this->route('provider')->id.''
        ];
    }
}
