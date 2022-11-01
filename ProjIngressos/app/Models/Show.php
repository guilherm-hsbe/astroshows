<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'qtd_ingressos',
        'data',
        'horario_i',
        'horario_f'
        
    ];
}
