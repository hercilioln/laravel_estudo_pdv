<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sal_client_id');
            $table->foreign('sal_client_id')->references('id')->on('clients');

            $table->unsignedBigInteger('sal_user_id');
            $table->foreign('sal_user_id')->references('id')->on('users');

            $table->dateTime('sal_purchase_date');
            $table->decimal('sal_tax');
            $table->decimal('sal_total');
            $table->enum('sal_status', ['VALID', 'CANCELED'])->default('VALID');


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
        Schema::dropIfExists('sales');
    }
}
