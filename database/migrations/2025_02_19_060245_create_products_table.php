<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->string('product_size');
            $table->json('category');
            $table->string('system');
            $table->string('power_supply')->nullable();
            $table->string('status');
            $table->string('front_port');
            $table->string('display_size');
            $table->string('package_size');
            $table->string('net_weight');
            $table->string('gross_weight');
            $table->integer('quantity');
            $table->integer('rating');
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('products');
    }
};
