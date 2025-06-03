<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $fillable = [
        'jogador1_id',
        'jogador2_id',
        'resultado', // Exemplo: "6x3", "7x6"
        'data_partida',
        'torneio_id',
    ];

    public function jogador1()
    {
        return $this->belongsTo(Jogador::class, 'jogador1_id');
    }

    public function jogador2()
    {
        return $this->belongsTo(Jogador::class, 'jogador2_id');
    }

    public function torneio()
    {
        return $this->belongsTo(Torneio::class);
    }
}
