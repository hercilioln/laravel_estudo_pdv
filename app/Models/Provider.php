<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'prv_name',
        'prv_email',
        'prv_cnpj',
        'prv_address',
        'prv_phone'
    ];
    
    public function products(){
        return $this->hasMany(Product::class);
    }
}
