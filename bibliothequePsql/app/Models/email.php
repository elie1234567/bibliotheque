<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    use HasFactory;
    protected $fillable = [
        'idem','nom','discution',
    ];
}
