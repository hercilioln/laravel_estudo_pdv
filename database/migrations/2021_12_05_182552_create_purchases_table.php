<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->dateTime('pur_date');
            $table->decimal('pur_tax');
            $table->decimal('pur_total');
            $table->enum('pur_status', ['VALID', 'CANCELED'])->default('VALID');
            $table->string('pur_picture');
            
            $table->unsignedBigInteger('pur_provider_id');
            $table->foreign('pur_provider_id')->references('id')->on('providers');

            $table->unsignedBigInteger('pur_user_id');
            $table->foreign('pur_user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
