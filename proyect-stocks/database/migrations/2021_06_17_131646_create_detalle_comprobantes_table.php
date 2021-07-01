<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_comprobantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_comprobante');
            $table->foreign('id_comprobante')
                    ->references('id')
                    ->on ('comprobantes');
            $table->unsignedBigInteger('id_articulo');
            $table->foreign('id_articulo')
                    ->references('id')
                    ->on ('articulos');
            $table->integer('cantidad');
            $table->float('precio');
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
        Schema::dropIfExists('detalle_comprobantes');
    }
}
