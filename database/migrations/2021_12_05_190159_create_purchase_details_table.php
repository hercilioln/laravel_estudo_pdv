<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pud_purchase_id');
            $table->foreign('pud_purchase_id')->references('id')->on('purchases');

            $table->unsignedBigInteger('pud_product_id');
            $table->foreign('pud_product_id')->references('id')->on('products');

            $table->integer('pud_quantity');
            $table->decimal('pud_price');
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
        Schema::dropIfExists('purchase_details');
    }
}
