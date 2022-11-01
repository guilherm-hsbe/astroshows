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
        'horario_f',
        'artista_id',
        'local_id',        
    ];
    public function artista(){
        return $this->belongsTo(Artista::class);
    }

    public function local(){
        return $this->belongsTo(Local::class);
    }

    public function ingressosShow(){

        return $this->belongsToMany(Compras::class, 'compra_produtos', 'produtos_id', 'compras_id')
                        ->withPivot('quantidade', 'preco')
                        ->withTimestamps();
    }
}
