<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnContentInProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Thêm cột content vào vào bảng products
        Schema::table('products', function (Blueprint $table) {
            $table->text('content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Xóa cột content trong products
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('content');
        });
    }
}
