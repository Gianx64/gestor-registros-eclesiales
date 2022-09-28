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
            $table->id();
            $table->integer('NumLibro');
            $table->integer('NumPag');
            $table->string('LugardeCelebracion', 60);
            $table->string('Celebrante', 60);
            $table->string('RutConfirmado', 20)
                  ->unique();
            $table->date('FecCel');
            $table->string('Confirmado', 60);
            $table->string('ApellidoPaterno', 60)
                  ->nullable();
            $table->string('ApellidoMaterno', 60)
                  ->nullable();
            $table->string('Padre', 60)
                  ->nullable();
            $table->string('Madre', 60)
                  ->nullable();
            $table->string('Padrino', 60)
                  ->nullable();
            $table->string('Madrina', 60)
                  ->nullable();
            $table->string('LugarBautizo', 60);
            $table->date('FecBautizo');
            $table->integer('NumLibroBautizo');
            $table->integer('NumPagBautizo');
            $table->text('Notas')
                  ->nullable();
            $table->string('Parroco', 60);
            $table->string('DoyFe', 60);
            $table->string('Usuario_modificacion', 60)
                  ->nullable();
            $table->integer('status')->default(1);
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
