<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                ->constrained('orders')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreignId('product_id')
                ->constrained('products')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->enum('status', ['RE', 'PA', 'CA']); //Reservado, Pago, Cancelado
            $table->decimal('valor', 6, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
};