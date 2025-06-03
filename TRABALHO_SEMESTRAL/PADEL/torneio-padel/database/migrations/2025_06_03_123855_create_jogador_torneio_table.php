public function up()
{
    Schema::create('jogador_torneio', function (Blueprint $table) {
        $table->id();
        $table->foreignId('jogador_id')->constrained()->onDelete('cascade');
        $table->foreignId('torneio_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
