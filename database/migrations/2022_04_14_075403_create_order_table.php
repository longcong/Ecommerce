<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('cname');
            $table->string('city');
            $table->string('state');
            $table->string('address1');
            $table->string('address2');
            $table->string('email')->nullable();
            $table->integer('phone');
            $table->integer('zipcode');
            $table->longText('note')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->string('message')->nullable();
            $table->string('tracking_no');
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
        Schema::dropIfExists('order');
    }
}
