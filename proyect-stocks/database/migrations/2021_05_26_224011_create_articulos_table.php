<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('detalle');
            $table->timestamps();
        });  
        
        Schema::create('articulos', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_rubro');
            $table->foreign('id_rubro')
                    ->references('id')
                    ->on ('rubros')
                    ->onDelete('cascade');
            $table->string('nombre');
            $table->float('precio');
            $table->integer('cant_max');
            $table->integer('cant_min');
            $table->date('fecha-vencimiento');
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
        Schema::dropIfExists('articulos');
    }
}
