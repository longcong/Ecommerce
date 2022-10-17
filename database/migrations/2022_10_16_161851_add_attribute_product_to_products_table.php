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
            $table->string('dai')->nullable()->after('status_id');
            $table->string('dui')->nullable()->after('dai');
            $table->string('polo')->nullable()->after('dui');
            $table->string('phong')->nullable()->after('polo');
            $table->string('aodaitay')->nullable()->after('phong');
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
            $table->dropColumn('dai');
            $table->dropColumn('dui');
            $table->dropColumn('polo');
            $table->dropColumn('phong');
            $table->dropColumn('aodaitay');
        });
    }
}
