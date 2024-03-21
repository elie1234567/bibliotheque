<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emprunt extends Model
{
    use HasFactory;
    protected $fillable = [
        'emprunteur',
        'livre',
        'date_emp',
        'date_retour',
        
    ];
}
