<?php

namespace App\Http\Controllers;

use App\Models\Torneio;
use App\Models\Jogador;
use App\Models\Partida;
use Illuminate\Http\Request;

class TorneioController extends Controller
{
    public function index()
    {
        $torneios = Torneio::all();
        return view('torneios.index', compact('torneios'));
    }

    public function create()
    {
        return view('torneios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data' => 'required|date',
            'categoria' => 'required|in:masculino,feminino,misto',
        ]);

        Torneio::create($request->all());

        return redirect()->route('torneios.index')->with('success', 'Torneio criado com sucesso.');
    }

    public function show(Torneio $torneio)
    {
        return view('torneios.show', compact('torneio'));
    }

    public function edit(Torneio $torneio)
    {
        return view('torneios.edit', compact('torneio'));
    }

    public function update(Request $request, Torneio $torneio)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data' => 'required|date',
            'categoria' => 'required|in:masculino,feminino,misto',
        ]);

        $torneio->update($request->all());

        return redirect()->route('torneios.index')->with('success', 'Torneio atualizado com sucesso.');
    }

    public function destroy(Torneio $torneio)
    {
        $torneio->delete();

        return redirect()->route('torneios.index')->with('success', 'Torneio excluído com sucesso.');
    }

    public function gerarPartidas($id)
{
    $torneio = Torneio::with('jogadores')->findOrFail($id);
    $jogadores = $torneio->jogadores;

    foreach ($jogadores as $i => $jogador1) {
        for ($j = $i + 1; $j < count($jogadores); $j++) {
            $jogador2 = $jogadores[$j];
            Partida::create([
                'jogador1_id' => $jogador1->id,
                'jogador2_id' => $jogador2->id,
                'torneio_id' => $torneio->id,
                'data_partida' => now()->addDays(rand(1, 30)),
            ]);
        }
    }

    return redirect()->route('torneios.index')->with('success', 'Partidas geradas com sucesso!');
}
