<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'cli_name',
        'cli_cpf',
        'cli_address',
        'cli_phone',
        'cli_email'
    ];
}
