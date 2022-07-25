<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('cliente',50);
            $table->integer('numero_articulo')->length(10);
            $table->integer('codigo_articulo')->length(10);
            $table->string('nombre_articulo',60);
            $table->integer('sub_total')->length(10);
            $table->integer('iva')->length(50);
            $table->integer('valor_total')->length(50);

            $table->unsignedBigInteger('custumers_id');
            $table->foreign("custumers_id")->references("id")->on("custumers")->onDelete("cascade")->onUpdate("cascade");

      
        
            
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
        Schema::dropIfExists('orders');
    }
}
