<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnCodeDiscount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Đổi tên cột code -> name
        Schema::table('discounts', function (Blueprint $table) {
            $table->renameColumn('code', 'name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Đổi tên cột name -> code
        Schema::table('discounts', function (Blueprint $table) {
            $table->renameColumn('name', 'code');
        });
    }
}
