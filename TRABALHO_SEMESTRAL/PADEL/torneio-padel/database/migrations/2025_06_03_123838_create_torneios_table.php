public function up()
{
    Schema::create('torneios', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->date('data');
        $table->enum('categoria', ['masculino', 'feminino', 'misto']);
        $table->timestamps();
    });
}
