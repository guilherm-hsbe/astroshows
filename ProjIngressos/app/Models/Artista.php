<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_artistico',
        'descricao',
        'imagem',
    ];
}