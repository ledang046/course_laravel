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
            [
                'name' => 'SASS', 
                'parent_id' => 1, 
                'price' => 306000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1,
                'hot' => 0
            ],
            [
                'name' => 'tailwind', 
                'parent_id' => 1, 
                'price' => 360000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1,
                'hot' => 0
            ],
            [
                'name' => 'ReactJS', 
                'parent_id' => 1, 
                'price' => 400000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'VueJS', 
                'parent_id' => 1, 
                'price' => 400000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'Angular', 
                'parent_id' => 1, 
                'price' => 500000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'PHP', 
                'parent_id' => 2, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'NodeJS', 
                'parent_id' => 2, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'Python', 
                'parent_id' => 2, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'Java', 
                'parent_id' => 2, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'Manual Test', 
                'parent_id' => 3, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'Automatic Test', 
                'parent_id' => 3, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'SQL Server', 
                'parent_id' => 4, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'My Sql', 
                'parent_id' => 4, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'Postgresql', 
                'parent_id' => 4, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
            [
                'name' => 'Oracle', 
                'parent_id' => 4, 
                'price' => 300000, 
                'description' => Str::random(255), 
                'content' => '', 
                'display' => 1
            ],
        ]);
    }
}
