<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('discount_unit');
            $table->bigInteger('category_id')->default('0');
            $table->bigInteger('view')->default('0');
            $table->bigInteger('status_id')->default('0');
            $table->float('price');
            $table->integer('quantity')->default('0');
            $table->longText('note')->nullable();
            $table->integer('discount_value');
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
}
