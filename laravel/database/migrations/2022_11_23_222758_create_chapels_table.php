<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapels', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 60)
                  ->unique()
                  ->comment('Nombre de la capilla.');
            $table->string('Direccion', 60)
                  ->nullable()
                  ->comment('Dirección de la capilla.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapels');
    }
}
