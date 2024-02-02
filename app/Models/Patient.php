<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mail',
        'date_birth',
        'phone',
        'cpf',
        'address',
        'how_find_us',
    ];
}
