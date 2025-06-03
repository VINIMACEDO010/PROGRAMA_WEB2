public function up()
{
    Schema::create('partidas', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('jogador1_id');
        $table->unsignedBigInteger('jogador2_id');

        $table->string('resultado')->nullable(); // Ex: "6x3", "7x6"
        $table->timestamp('data_partida');

        $table->timestamps();

        // Relacionamentos
        $table->foreign('jogador1_id')->references('id')->on('jogadors')->onDelete('cascade');
        $table->foreign('jogador2_id')->references('id')->on('jogadors')->onDelete('cascade');
    });
}
