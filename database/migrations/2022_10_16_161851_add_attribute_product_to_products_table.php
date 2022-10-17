<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeProductToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('ni')->nullable()->after('sizeS');
            $table->string('dui')->nullable()->after('ni');
            $table->string('phong')->nullable()->after('dui');
            $table->string('ao dai tay')->nullable()->after('phong');
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
            $table->dropColumn('ni');
            $table->dropColumn('dui');
            $table->dropColumn('phong');
            $table->dropColumn('ao dai tay');
        });
    }
}
