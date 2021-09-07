<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTypeParentidColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //Chuyển parent_id sang thành kiểu int
        Schema::table('products', function (Blueprint $table) {
            $table->integer('parent_id')->length(11)->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Chuyển parent_id về lại string
        Schema::table('products', function (Blueprint $table) {
            $table->string('parent_id', 255)->change();
        });
    }
}
