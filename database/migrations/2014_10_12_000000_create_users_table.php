<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('username')->unique();
            $table->string('password');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('cname')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('zipcode')->nullable();
            $table->longText('note')->nullable();
            $table->tinyInteger('role')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
