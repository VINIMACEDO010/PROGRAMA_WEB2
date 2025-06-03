<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data',
        'categoria', // masculino, feminino, misto
    ];

    public function jogadores()
    {
        return $this->belongsToMany(Jogador::class, 'inscricoes');
    }
}