public function up()
{
    Schema::create('torneios', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->enum('modalidade', ['Masculino', 'Feminino', 'Misto']);
        $table->unsignedInteger('num_jogadores');
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // quem criou
        $table->timestamps();
    });
}
