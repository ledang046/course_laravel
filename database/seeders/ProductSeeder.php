<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Thêm dữ liệu vào bảng products
        DB::table('products')->insert([
           ['name' => 'Frontend', 'parent_id' => 0, 'price' => 300000, 'description' => Str::random(255), 'display' => 1],
           ['name' => 'Backend', 'parent_id' => 0, 'price' => 400000, 'description' => Str::random(255), 'display' => 1],
           ['name' => 'Tester', 'parent_id' => 0, 'price' => 500000, 'description' => Str::random(255), 'display' => 1],
           ['name' => 'Data Engine', 'parent_id' => 0, 'price' => 600000, 'description' => Str::random(255), 'display' => 1],
        ]);
    }
}
