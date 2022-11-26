<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 60)
                  ->unique()
                  ->comment('Nombre del registro eclesial.');
            $table->text('Codigo')
                  ->comment('Código HTML del certificado.');
            $table->text('Tags')
                  ->comment('Tags a reemplazar por valores en el certificado.');
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
        Schema::dropIfExists('certificates');
    }
}
