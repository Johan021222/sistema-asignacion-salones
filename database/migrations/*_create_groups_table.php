public function up(): void
{
    Schema::create('groups', function (Illuminate\Database\Schema\Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('grado');        // ej: 6°, 7°, 8°
        $table->string('jornada');      // mañana/tarde/noche
        $table->unsignedSmallInteger('cupo')->default(0);
        $table->boolean('activo')->default(true);
        $table->timestamps();
    });
}
