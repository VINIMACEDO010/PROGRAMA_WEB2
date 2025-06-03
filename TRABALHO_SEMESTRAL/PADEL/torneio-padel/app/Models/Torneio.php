public function jogadores()
{
    return $this->belongsToMany(Jogador::class, 'jogador_torneio');
}

public function partidas()
{
    return $this->hasMany(Partida::class);
}
