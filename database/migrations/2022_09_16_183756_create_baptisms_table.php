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
            $table->id();
            $table->string('Rut', 20)
                  ->unique();
            $table->integer('NumLibro');
            $table->integer('NumPag');
            $table->string('Nombres', 60);
            $table->string('ApellidoPaterno', 60);
            $table->string('ApellidoMaterno', 60);
            $table->string('LugardeNacimiento', 60);
            $table->date('FecNac');
            $table->string('PapaNombre', 60);
            $table->string('PapaApellido', 60);
            $table->string('MamaNombre', 60);
            $table->string('MamaApellido', 60);
            $table->string('Padrino', 60);
            $table->string('Madrina', 60);
            $table->string('LugardeCelebracion', 60);
            $table->date('FecCel');
            $table->string('Ministro', 60);
            $table->string('Parroco', 60);
            $table->text('Notas')
                  ->nullable();
            $table->string('DoyFe', 60);
            $table->string('Usuario_modificacion', 60)
                  ->nullable();
            $table->integer('status')->default(1);
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
