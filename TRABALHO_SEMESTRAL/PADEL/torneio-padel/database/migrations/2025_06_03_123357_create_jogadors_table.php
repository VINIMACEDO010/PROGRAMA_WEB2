public function up()
{
    Schema::create('jogadors', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->enum('genero', ['masculino', 'feminino']);
        $table->timestamps();
    });
}
