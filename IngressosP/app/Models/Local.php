<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = "locais";

    use HasFactory;
    protected $fillable = [
        'nLocal',
        'endereco',
        'numero',
        'cidade',
        'estado',
        'cep',
    ];
}
