<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanosUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('planos_usuarios', function (Blueprint $table) {
    //         $table->integer('id_usuarios')->unsigned();
    //         $table->foreign('id_usuarios')->references('id')->on('users')->onDelete('cascade');

    //         $table->integer('id_plano')->unsigned();
    //         $table->foreign('id_plano')->references('id_plano')->on('planos')->onDelete('cascade');

    //         $table->timestamps();

    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planos_usuarios');
    }
}
