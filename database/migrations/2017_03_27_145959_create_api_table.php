<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poblacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Intervalos_edad');
            $table->string('Hombres');
            $table->string('Mujeres');
            $table->string('Total');
            $table->string('De');
            $table->string('Hasta');
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
        Schema::dropIfExists('poblacion');
    }
}
