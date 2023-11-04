<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
             $table-> string ('usuario')->primarykey();
             $table-> string ('nombre',25);
             $table-> string ('apellido',25);
             $table-> string ('correo',50)-> unique();
             $table-> string ('telefono',25);
             $table-> string ('password');

            //$table->timestamps(); //estos nos crea dos campos, create_at y update_at  datetime gurda fecha y hora
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
