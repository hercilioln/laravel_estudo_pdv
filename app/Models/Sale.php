<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sal_client_id',
        'sal_user_id',
        'sal_purchase_date',
        'sal_tax',
        'sal_total',
        'sal_status',

    ];
}
