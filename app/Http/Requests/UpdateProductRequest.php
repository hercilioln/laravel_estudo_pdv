<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
           
            'pro_name' => 'required|max:50',
            'pro_image' => 'nullable|dimensions:min_width=200,min_height=200',
            'pro_sell_price' => 'required',
            'pro_category_id' => 'required|integer|exists:App\Models\Cateogry,id',
            'pro_provider_id' => 'required|integer|exists:App\Models\Provider,id'
         ];
    }
}
