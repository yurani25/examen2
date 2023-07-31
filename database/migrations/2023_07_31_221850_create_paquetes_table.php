<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camionero_id');
            $table->unsignedBigInteger('provincia_id');

            $table->string('descripcion');
            $table->string('destinatario');
             $table->string('direcion');


            $table->foreign('camionero_id')->references('id')->on('camioneros')->onDelete('set null');
            $table->foreign('provincia_id')->references('id')->on('camioneros')->onDelete('set null');

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
        Schema::dropIfExists('paquetes');
    }
}
