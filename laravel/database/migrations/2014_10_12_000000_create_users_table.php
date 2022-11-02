<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()
                  ->comment('Número identificador de usuario.');
            $table->string('name')
                  ->comment('Nombre del usuario.');
            $table->string('email')
                  ->unique()
                  ->comment('Correo electrónico del usuario.');
            $table->timestamp('email_verified_at')
                  ->nullable()
                  ->comment('Fecha de verificación de correo electrónico del usuario.');
            $table->string('password')
                  ->comment('Contaseña hasheada del usuario.');
            $table->rememberToken()
                  ->comment('Token de recuerdo del usuario.');
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
        Schema::dropIfExists('users');
    }
}
