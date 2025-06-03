Schema::create('jogadors', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->enum('genero', ['masculino', 'feminino', 'misto']); // usado para torneios também
    $table->integer('idade')->nullable();
    $table->string('email')->unique();
    $table->string('telefone')->nullable();
    $table->timestamps();
});
