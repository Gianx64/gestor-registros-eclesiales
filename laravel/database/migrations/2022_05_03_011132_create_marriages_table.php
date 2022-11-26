<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriages', function (Blueprint $table) {
            $table->id()
                  ->comment('Número identificador de matrimonio.');
            $table->integer('NumLibro')
                  ->unsigned()
                  ->nullable()
                  ->comment('Número de libro del matrimonio.');
            $table->integer('NumPag')
                  ->unsigned()
                  ->nullable()
                  ->comment('Número de página del matrimonio.');
            $table->string('Parroquia', 60)
                  ->comment('Nombre de parroquia que registró el matrimonio.');
            $table->string('Impedimento', 60)
                  ->comment('Impedimento del matrimonio.');
            $table->string('RutEsposo', 20)
                  ->unique()
                  ->comment('Rut del esposo.');
            $table->string('NombresEsposo', 60)
                  ->comment('Nombres del esposo.');
            $table->string('ApellidoPaternoEsposo', 60)
                  ->comment('Apellido paterno del esposo.');
            $table->string('ApellidoMaternoEsposo', 60)
                  ->comment('Apellido materno del esposo.');
            $table->string('EstadoEsposo', 60)
                  ->comment('Estado civil del esposo.');
            $table->string('PapaNombresEsposo', 60)
                  ->nullable()
                  ->comment('Nombres del padre del esposo.');
            $table->string('MamaNombresEsposo', 60)
                  ->nullable()
                  ->comment('Nombres de la madre del esposo.');
            $table->integer('EdadEsposo')
                  ->unsigned()
                  ->comment('Edad del esposo al momento del casamiento.');
            $table->string('ParroquiaBautismoEsposo', 60)
                  ->comment('Parroquia de bautismo del esposo.');
            $table->integer('NumLibroBautismoEsposo')
                  ->unsigned()
                  ->comment('Número de libro de bautismo del esposo.');
            $table->integer('NumPagBautismoEsposo')
                  ->unsigned()
                  ->comment('Número de página de bautismo del esposo.');
            $table->string('RutEsposa', 20)
                  ->unique()
                  ->comment('Rut de la esposa.');
            $table->string('NombresEsposa', 60)
                  ->comment('Rut de la esposa.');
            $table->string('ApellidoPaternoEsposa', 60)
                  ->comment('Apellido paterno de la esposa.');
            $table->string('ApellidoMaternoEsposa', 60)
                  ->comment('Apellido materno de la esposa.');
            $table->string('EstadoEsposa', 60)
                  ->comment('Estado civil de la esposa.');
            $table->string('PapaNombresEsposa', 60)
                  ->nullable()
                  ->comment('Nombres del padre de la esposa.');
            $table->string('MamaNombresEsposa', 60)
                  ->nullable()
                  ->comment('Nombres de la madre de la esposa.');
            $table->integer('EdadEsposa')
                  ->unsigned()
                  ->comment('Edad de la esposa al momento del casamiento.');
            $table->string('ParroquiaBautismoEsposa', 60)
                  ->comment('Parroquia de bautismo de la esposa.');
            $table->integer('NumLibroBautismoEsposa')
                  ->unsigned()
                  ->comment('Número de libro de bautismo de la esposa.');
            $table->integer('NumPagBautismoEsposa')
                  ->unsigned()
                  ->comment('Número de página de bautismo de la esposa.');
            $table->string('SiendoTestigo')
                  ->comment('Nombres completos de testigos del matrimonio.');
            $table->string('Celebrante', 60)
                  ->comment('Celebrante del matrimonio.');
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
                  ->comment('Correo de usuario más reciente en manipular registro.');
            $table->softDeletes()
                  ->comment('Fecha cuando se eliminó el registro.');
            $table->timestamps();
        });
        //Schema::rename('marriages', 'Matrimonios');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marriages');
    }
}
