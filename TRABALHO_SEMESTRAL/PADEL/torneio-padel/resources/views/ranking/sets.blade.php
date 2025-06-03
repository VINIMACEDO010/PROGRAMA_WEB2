@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Ranking por Sets</h2>

    @if($ranking->isEmpty())
        <p>Nenhum dado encontrado.</p>
    @else
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Jogador</th>
                    <th>Sets Vencidos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ranking as $item)
                    <tr>
                        <td>{{ $item['nome'] }}</td>
                        <td>{{ $item['sets_vencidos'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
