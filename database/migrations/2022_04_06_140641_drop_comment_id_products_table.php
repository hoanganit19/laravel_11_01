<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCommentIdProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('products', function (Blueprint $table){

            //Xoá khoá ngoại
            $table->dropForeign('products_comment_id_foreign');
            
            //Xoá cột comment_id
            $table->dropColumn('comment_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('products', function (Blueprint $table){

            //Thêm cột comment_id
            $table->integer('comment_id')->unsigned()->after('content');

            //Thiết lập khoá ngoại cho comment_id
            $table->foreign('comment_id')->references('id')->on('comments');
        });
    }
}
