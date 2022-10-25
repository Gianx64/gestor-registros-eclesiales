<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmations', function (Blueprint $table) {
            $table->id()
                  ->comment('Número identificador de confirmación.');
            $table->string('Rut', 20)
                  ->unique()
                  ->comment('Rut del confirmado.');
            $table->integer('NumLibro')
                  ->unsigned()
                  ->nullable()
                  ->comment('Número de libro de la confirmación.');
            $table->integer('NumPag')
                  ->unsigned()
                  ->nullable()
                  ->comment('Número de página de la confirmación.');
            $table->string('Nombres', 60)
                  ->comment('Nombres del confirmado.');
            $table->string('ApellidoPaterno', 60)
                  ->comment('Apellido paterno del confirmado.');
            $table->string('ApellidoMaterno', 60)
                  ->comment('Apellido materno del confirmado.');
            $table->string('PapaNombre', 60)
                  ->nullable()
                  ->comment('Nombres del padre del confirmado.');
            $table->string('PapaApellido', 60)
                  ->nullable()
                  ->comment('Apellidos del padre del confirmado.');
            $table->string('MamaNombre', 60)
                  ->nullable()
                  ->comment('Nombres de la madre del confirmado.');
            $table->string('MamaApellido', 60)
                  ->nullable()
                  ->comment('Apellidos de la madre del confirmado.');
            $table->string('Padrino', 60)
                  ->nullable()
                  ->comment('Nombre completo del padrino del confirmado.');
            $table->string('Madrina', 60)
                  ->nullable()
                  ->comment('Nombre completo de la madrina del confirmado.');
            $table->string('LugBautizo', 60)
                  ->comment('Lugar de celebración del bautizo.');
            $table->date('FecBautizo')
                  ->comment('Fecha de celebración del bautizo.');
            $table->integer('NumLibroBautizo')
                  ->unsigned()
                  ->nullable()
                  ->comment('Número de libro del bautizo.');
            $table->integer('NumPagBautizo')
                  ->unsigned()
                  ->nullable()
                  ->comment('Número de página del bautizo.');
            $table->string('Celebrante', 60)
                  ->comment('Nombre completo del celebrante.');
            $table->string('LugCel', 60)
                  ->comment('Lugar de celebración.');
            $table->date('FecCel')
                  ->comment('Fecha de celebración.');
            $table->string('Parroco', 60)
                  ->comment('Nombre completo del párroco.');
            $table->string('Notas')
                  ->nullable()
                  ->comment('Notas adicionales del matrimonio.');
            $table->string('DoyFe', 60);
            $table->string('updated_by')
                  ->comment('Nombre de usuario más reciente en manipular registro.');
            $table->softDeletes()
                  ->comment('Fecha cuando se eliminó el registro.');
            $table->timestamps();
        });
        //Schema::rename('confirmations', 'Confirmaciones');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmations');
    }
}
