<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) 
        {
            $table->id(); // autoincrementable primary key 
            $table->unsignedBigInteger('id_gatito'); // esto genera un campo para otra tabla
            $table->string('nombre', 50); // esto crea un campo en la tabla con una longitud
            $table->integer('edad');//esto crea un campo de tipo integer con longitud por defecto
            $table->foreign('id_gatito')->references('id')->on('gatitos')->onDelete('cascade');
            $table->timestamps();//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
