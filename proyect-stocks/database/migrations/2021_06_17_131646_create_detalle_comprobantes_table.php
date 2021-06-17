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
            $table->id('id_detalle');
           // $table->id('id_comprobante');
           // $table->id('id_articulo');
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
