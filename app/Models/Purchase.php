<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'pur_date',
        'pur_tax',
        'pur_total',
        'pur_status',
        'pur_picture',
        'pur_provider_id',
        'pur_user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }

    public function purchaseDetails(){
        return $this->hasMany(PurchaseDetails::class);
    }
}
