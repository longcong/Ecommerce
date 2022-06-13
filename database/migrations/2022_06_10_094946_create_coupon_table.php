<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('discription');
            $table->tinyInteger('published');
            $table->string('type');
            $table->string('code');
            $table->string('owner');
            $table->tinyInteger('free_shipping')->default('0');
            $table->longText('detail');
            $table->double('discount_coup');
            $table->string('discount_type');
            $table->tinyInteger('start_date');
            $table->tinyInteger('end_date');
            $table->tinyInteger('is_active');
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
        Schema::dropIfExists('coupon');
    }
}
