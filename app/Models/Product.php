<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_code',
        'pro_name',
        'pro_image',
        'pro_stock',
        'pro_sell_price',
        'pro_status',
        'pro_category_id',
        'pro_provider_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
