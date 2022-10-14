<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaptismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baptisms', function (Blueprint $table) {
            $table->id()
                  ->comment('Número identificador de bautizo.');
            $table->string('Rut', 20)
                  ->unique()
                  ->comment('Rut del bautizado.');
            $table->integer('NumLibro')
                  ->unsigned()
                  ->nullable()
                  ->comment('Número de libro del bautizo.');
            $table->integer('NumPag')
                  ->unsigned()
                  ->nullable()
                  ->comment('Número de página del bautizo.');
            $table->string('Nombres', 60)
                  ->comment('Nombres del bautizado.');
            $table->string('ApellidoPaterno', 60)
                  ->comment('Apellido paterno del bautizado.');
            $table->string('ApellidoMaterno', 60)
                  ->comment('Apellido materno del bautizado.');
            $table->string('LugNac', 60)
                  ->comment('Lugar de nacimiento del bautizado.');
            $table->date('FecNac')
                  ->comment('Fecha de nacimiento del bautizado.');
            $table->string('PapaNombre', 60)
                  ->nullable()
                  ->comment('Nombres del padre del bautizado.');
            $table->string('PapaApellido', 60)
                  ->nullable()
                  ->comment('Apellidos del padre del bautizado.');
            $table->string('MamaNombre', 60)
                  ->nullable()
                  ->comment('Nombres de la madre del bautizado.');
            $table->string('MamaApellido', 60)
                  ->nullable()
                  ->comment('Apellidos de la madre del bautizado.');
            $table->string('Padrino', 60)
                  ->nullable()
                  ->comment('Nombre completo del padrino del bautizado.');
            $table->string('Madrina', 60)
                  ->nullable()
                  ->comment('Nombre completo de la madrina del bautizado.');
            $table->string('LugCel', 60)
                  ->comment('Lugar de celebración del bautizo.');
            $table->date('FecCel')
                  ->comment('Fecha de celebración del bautizo.');
            $table->string('Ministro', 60)
                  ->comment('Nombre completo del ministro del bautizo.');
            $table->string('Parroco', 60)
                  ->comment('Nombre completo del párroco del bautizo.');
            $table->text('Notas')
                  ->nullable()
                  ->comment('Notas adicionales del bautizo.');
            $table->string('DoyFe', 60);
            $table->string('updated_by')
                  ->comment('Nombre de usuario más reciente en manipular registro.');
            $table->softDeletes()
                  ->comment('Fecha cuando se eliminó el registro.');
            $table->timestamps();
        });
        //Schema::rename('baptisms', 'Bautizos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baptisms');
    }
}
