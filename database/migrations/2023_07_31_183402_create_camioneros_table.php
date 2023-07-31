<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camioneros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('poblacion');
            $table->integer('telefono');
            $table->string('dierecion');
             $table->string('salario');
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
        Schema::dropIfExists('camioneros');
    }
}
