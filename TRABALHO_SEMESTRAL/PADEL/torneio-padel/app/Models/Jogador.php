public function torneios()
{
    return $this->belongsToMany(Torneio::class, 'jogador_torneio');
}
