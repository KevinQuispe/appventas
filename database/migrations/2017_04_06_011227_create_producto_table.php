<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('producto', function(BluePrint $table){
            $table->increments('id');
            $table->string('Descripcion',100);
            $table->integer('idProveedor')->unsigned();
            $table->decimal('PrecioCosto',8,2);
            $table->decimal('PrecioVenta',8,2);
            $table->string('Foto',100);
            
            $table->foreign('idProveedor')->references('id')->on('proveedor');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto');
    }
}
