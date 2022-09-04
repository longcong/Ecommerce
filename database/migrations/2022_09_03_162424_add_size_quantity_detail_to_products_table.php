<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSizeQuantityDetailToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('sizeS')->default('0')->after('quantity');
            $table->integer('sizeM')->default('0')->after('quantity');
            $table->integer('sizeL')->default('0')->after('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('sizeS');
            $table->integer('sizeM');
            $table->integer('sizeL');
        });
    }
}
