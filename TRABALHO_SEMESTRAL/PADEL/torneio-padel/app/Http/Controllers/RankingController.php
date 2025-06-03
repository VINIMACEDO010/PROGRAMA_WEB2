<?php

namespace App\Http\Controllers;

use App\Models\Jogador;

public function rankingSets()
{
    $jogadores = Jogador::all()->map(function ($jogador) {
        $setsVencidos = 0;

        foreach ($jogador->partidasComoJogador1 as $partida) {
            $placar = explode('x', $partida->resultado);
            if (isset($placar[0])) $setsVencidos += (int) $placar[0];
        }

        foreach ($jogador->partidasComoJogador2 as $partida) {
            $placar = explode('x', $partida->resultado);
            if (isset($placar[1])) $setsVencidos += (int) $placar[1];
        }

        return [
            'nome' => $jogador->nome,
            'sets_vencidos' => $setsVencidos,
        ];
    });

    $ranking = $jogadores->sortByDesc('sets_vencidos')->values();

    return view('ranking.sets', compact('ranking'));
}
