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
            $table->id();
            $table->integer('NumLibro');
            $table->integer('NumPag');
            $table->string('CiudadCelebracion', 60);
            $table->string('LugardeCelebracion', 60);
            $table->string('Parroquia', 60);
            $table->date('FechaCelebracion');
            $table->string('Impedimiento', 60);
            $table->string('Celebrante', 60);
            $table->string('RutEsposo', 20)
                  ->unique();
            $table->string('NombresEsposo', 60);
            $table->string('ApellidoPaternoEsposo', 60);
            $table->string('ApellidoMaternoEsposo', 60);
            $table->string('EstadoEsposo', 60);
            $table->string('PapaNombresEsposo', 60)
                  ->nullable();
            $table->string('MamaNombresEsposo', 60)
                  ->nullable();
            $table->integer('EdadEsposo');
            $table->string('ParroquiaBautismoEsposo', 60);
            $table->integer('NumLibroBautismoEsposo');
            $table->integer('NumPagBautismoEsposo');
            $table->string('RutEsposa', 20)
                  ->unique();
            $table->string('NombresEsposa', 60);
            $table->string('ApellidoPaternoEsposa', 60);
            $table->string('ApellidoMaternoEsposa', 60);
            $table->string('EstadoEsposa', 60);
            $table->string('PapaNombresEsposa', 60)
                  ->nullable();
            $table->string('MamaNombresEsposa', 60)
                  ->nullable();
            $table->integer('EdadEsposa');
            $table->string('ParroquiaBautismoEsposa', 60);
            $table->integer('NumLibroBautismoEsposa');
            $table->integer('NumPagBautismoEsposa');
            $table->string('SiendoTestigo');
            $table->integer('PaginaPartida');
            $table->string('Notas')
                  ->nullable();
            $table->string('Parroco', 60);
            $table->string('DoyFe', 60);
            $table->string('Usuario_modificacion', 60)
                  ->nullable();
            $table->integer('status')->default(1);
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
