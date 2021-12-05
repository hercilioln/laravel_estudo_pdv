<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pro_code', 10)->unique();
            $table->string('pro_name', 50);
            $table->string('pro_image')->nullable();
            $table->integer('pro_stock');
            $table->decimal('pro_sell_price', 12, 2);
            $table->enum('pro_status', ['ATIVO', 'INATIVO'])->default('ATIVO');

            $table->unsignedBigInteger('pro_category_id');
            $table->foreing('pro_category_id')->refernces('id')->on('categories');

            $table->unsignedBigInteger('pro_provider_id');
            $table->foreing('pro_provider_id')->refernces('id')->on('providers');

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
