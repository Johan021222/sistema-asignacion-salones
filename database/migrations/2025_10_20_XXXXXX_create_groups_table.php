public function up(): void
{
    Schema::create('groups', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('grado');
        $table->string('jornada');
        $table->integer('cupo');
        $table->boolean('activo')->default(true);
        $table->timestamps();
    });
}
