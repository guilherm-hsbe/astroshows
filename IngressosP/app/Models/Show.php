<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
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

        return $this->belongsToMany(User::class, 'ingressos', 'shows_id', 'users_id')
                        ->withPivot('preco','data_compra')
                        ->withTimestamps();
    }
}
