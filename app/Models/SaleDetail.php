<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'sld_sale_id',
        'sld_product_id',
        'sld_quantity',
        'sld_price',
        'sld_discount'
    ];
}
