<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->decimal('cust_price');
            $table->decimal('sale_price');
            $table->string('photo');
            $table->string('description');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
