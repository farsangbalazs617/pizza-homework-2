<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            [
                'cname' => 'page',
                'price' => 850,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cname' => 'nobleman',
                'price' => 950,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cname' => 'king',
                'price' => 1250,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cname' => 'knight',
                'price' => 1150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
