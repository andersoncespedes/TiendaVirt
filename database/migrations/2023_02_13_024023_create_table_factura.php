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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20);
            $table->bigInteger('id_prod')->unsigned();
            $table->foreign('id_prod')->references('id_prod')->on('products')->onUpdate('cascade')->onDelete('cascade');;
            $table->dateTime('fecha', $precision = 0);
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
        Schema::dropIfExists('table_factura');
    }
};
