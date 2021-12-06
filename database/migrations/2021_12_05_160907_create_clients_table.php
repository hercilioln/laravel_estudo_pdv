<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
   
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('cli_name', 100);
            $table->string('cli_cpf', 14)->unique();
            $table->string('cli_address')->nullable();
            $table->string('cli_phone', 15)->unique();
            $table->string('cli_email')->nullable()->unique();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
