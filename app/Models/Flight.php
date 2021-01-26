<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'origin', 'destiny', 'time'
    ];
}
