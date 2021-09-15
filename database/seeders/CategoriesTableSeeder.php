<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Thêm dữ liệu vào bảng categories
        DB::table('categories')->insert([
           ['name' => 'Frontend', 'description' => Str::random(255), 'display' => 1],
           ['name' => 'Backend', 'description' => Str::random(255), 'display' => 1],
           ['name' => 'Tester', 'description' => Str::random(255), 'display' => 1],
           ['name' => 'Data Engine', 'description' => Str::random(255), 'display' => 1],
        ]);
    }
}
