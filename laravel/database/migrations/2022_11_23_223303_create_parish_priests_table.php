<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParishPriestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parish_priests', function (Blueprint $table) {
            $table->id();
            $table->string('Rut', 20)
                  ->unique()
                  ->comment('Rut del párroco.');
            $table->string('Parroco', 60)
                  ->comment('Nombre completo del párroco.');
            $table->string('updated_by')
                  ->comment('Correo de usuario más reciente en manipular registro.');
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
        Schema::dropIfExists('parish_priests');
    }
}
