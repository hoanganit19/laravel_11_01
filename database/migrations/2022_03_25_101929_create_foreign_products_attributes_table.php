<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignProductsAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_attributes', function (Blueprint $table) {
            $table->foreign('attribute_id')->references('id')->on('attributes');
            $table->foreign('value_id')->references('id')->on('attributes_values');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_attributes', function (Blueprint $table) {
            $table->dropForeign('products_attributes_attribute_id_foreign');

            $table->dropForeign('products_attributes_value_id_foreign');
        });
    }
}
