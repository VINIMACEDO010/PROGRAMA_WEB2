public function up()
{
    Schema::create('partidas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('torneio_id')->constrained()->onDelete('cascade');
        $table->foreignId('jogador1_id')->constrained('jogadors')->onDelete('cascade');
        $table->foreignId('jogador2_id')->constrained('jogadors')->onDelete('cascade');
        $table->string('resultado')->nullable(); // Ex: "6x3"
        $table->dateTime('data_partida')->nullable();
        $table->timestamps();
    });
}
