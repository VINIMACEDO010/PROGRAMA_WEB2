use App\Http\Controllers\JogadorController;
use App\Http\Controllers\TorneioController;
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\RankingController; // <- Adicionado aqui

Route::middleware(['auth'])->group(function () {
    Route::resource('jogadors', JogadorController::class);
    Route::resource('torneios', TorneioController::class);
    Route::resource('partidas', PartidaController::class);
});

Route::get('/torneios/{id}/gerar-partidas', [TorneioController::class, 'gerarPartidas']);
Route::get('/ranking/sets', [RankingController::class, 'rankingSets']);
