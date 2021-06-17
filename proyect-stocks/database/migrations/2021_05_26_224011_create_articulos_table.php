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
        Schema::create('articulos', function (Blueprint $table) {
            $table->id('id_articulo'); 
            $table->unsignedBigInteger('id_rubro');
            $table->foreignId('id_rubro1')
                    ->references('id_rubro')
                    ->on ('rubros');
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
