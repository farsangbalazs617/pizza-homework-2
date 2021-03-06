<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("users")->insert([
            [
                'name' => 'Teszt Admin',
                'email' => 'admin@test.t',
                'password' => '$2a$12$JdOcovhHenX22.Rmyd3PFu4NIdsw5DOQTsuGXmin091Zl1eyuOjIK', //teszt
                'role' => 'admin',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Teszt User',
                'email' => 'user@test.t',
                'password' => '$2a$12$JdOcovhHenX22.Rmyd3PFu4NIdsw5DOQTsuGXmin091Zl1eyuOjIK', //teszt
                'role' => 'user',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
