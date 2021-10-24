<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'name' => 'Course is good 1',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 1, 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Course is good 2',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 1, 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Course is good 3',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 1, 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Course is good 4',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 1, 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Course is good 5',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 0, 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Course is good 6',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Course is good 7',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Course is good 8',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Course is good 9',
                'description' => Str::random(255), 
                'content' => Str::random(500),
                'photo' => 'htmlcss.png', 
                'display' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
