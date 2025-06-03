<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use App\Models\Torneio;
use App\Models\Jogador;
use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function index()
    {
        $partidas = Partida::with(['jogador1', 'jogador2', 'torneio'])->get();
        return view('partidas.index', compact('partidas'));
    }

    public function create()
    {
        $torneios = Torneio::all();
        $jogadores = Jogador::all();
        return view('partidas.create', compact('torneios', 'jogadores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'torneio_id' => 'required|exists:torneios,id',
            'jogador1_id' => 'required|exists:jogadors,id|different:jogador2_id',
            'jogador2_id' => 'required|exists:jogadors,id',
            'data_partida' => 'required|date',
            'resultado' => 'nullable|string',
        ]);

        Partida::create($request->all());

        return redirect()->route('partidas.index')->with('success', 'Partida criada com sucesso.');
    }

    public function show(Partida $partida)
    {
        return view('partidas.show', compact('partida'));
    }

    public function edit(Partida $partida)
    {
        $torneios = Torneio::all();
        $jogadores = Jogador::all();
        return view('partidas.edit', compact('partida', 'torneios', 'jogadores'));
    }

    public function update(Request $request, Partida $partida)
    {
        $request->validate([
            'torneio_id' => 'required|exists:torneios,id',
            'jogador1_id' => 'required|exists:jogadors,id|different:jogador2_id',
            'jogador2_id' => 'required|exists:jogadors,id',
            'data_partida' => 'required|date',
            'resultado' => 'nullable|string',
        ]);

        $partida->update($request->all());

        return redirect()->route('partidas.index')->with('success', 'Partida atualizada com sucesso.');
    }

    public function destroy(Partida $partida)
    {
        $partida->delete();

        return redirect()->route('partidas.index')->with('success', 'Partida excluída com sucesso.');
    }
}
