<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discount')->insert([
            ['code' => 'GIAM500K','number' => '500000'],
            ['code' => 'GIAM20%','number' => '20'],
            ['code' => 'GIAM250K','number' => '250000']
        ]);
    }
}
