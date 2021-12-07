<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleDetailsTable extends Migration
{

    public function up()
    {
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sld_sale_id');
            $table->foreign('sld_sale_id')->references('id')->on('sales');

            $table->unsignedBigInteger('sld_product_id');
            $table->foreign('sld_product_id')->references('id')->on('products');

            $table->integer('sld_quantity');
            $table->decimal('sld_price');
            $table->decimal('sld_discount');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sale_details');
    }
}
