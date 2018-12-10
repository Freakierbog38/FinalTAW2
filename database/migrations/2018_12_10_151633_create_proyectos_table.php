<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empresa_id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('categoria');
            $table->string('tamano');
            $table->string('presupuest');
            $table->string('free_rol');
            $table->text('habilidades');
            $table->unsignedInteger('freelancer')->default(null);
            $table->timestamps();

            $table->foreign('freelancer')->references('id')->on('freelancers');
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
