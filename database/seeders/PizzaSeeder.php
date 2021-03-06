<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("pizzas")->insert([
            [
                'pname' => 'Áfonyás',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Babos',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Barbecue chicken',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Betyáros',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Caribi',
                'categoryname' => 'page',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Country',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Csabesz',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Csupa sajt',
                'categoryname' => 'knight',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Erdő kapitánya',
                'categoryname' => 'page',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Erős János',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Excellent',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Főnök kedvence',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Francia',
                'categoryname' => 'nobleman',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Frankfurti',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Füstös',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Gino',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Gombás',
                'categoryname' => 'page',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Góré',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Görög',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Gyros pizza',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'HamAndEggs',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Hamm',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Hawaii',
                'categoryname' => 'nobleman',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Hellas',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Hercegnő',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Ilike',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Ínyenc',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Jázmin álma',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Jobbágy',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Juhtúrós',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Kagylós',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Kétszínű',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Kiadós',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Király pizza',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Kívánság',
                'categoryname' => 'knight',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Kolbászos',
                'categoryname' => 'page',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Lagúna',
                'categoryname' => 'king',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Lecsó',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Maffiózó',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Magvas',
                'categoryname' => 'king',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Magyaros',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Máj Fair Lady',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Mamma fia',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Mexikói',
                'categoryname' => 'nobleman',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Mixi',
                'categoryname' => 'nobleman',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Nikó',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Nordic',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Nyuszó-Muszó',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Pacalos',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Pástétomos',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Pásztor',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Pipis',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Popey',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Quattro',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Ráki',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Rettenetes magyar',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Röfi',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Sajtos',
                'categoryname' => 'page',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'So-ku',
                'categoryname' => 'page',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Son-go-ku',
                'categoryname' => 'nobleman',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Sonkás',
                'categoryname' => 'page',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Spanyol',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Spencer',
                'categoryname' => 'nobleman',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Szalámis',
                'categoryname' => 'page',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Szardíniás',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Szerzetes',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Szőke kapitány',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Tenger gyümölcsei',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Tonhalas',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Törperős',
                'categoryname' => 'knight',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Tündi kedvence',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Tüzes halál',
                'categoryname' => 'king',
                'vegetarian' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Vega',
                'categoryname' => 'knight',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pname' => 'Zöldike',
                'categoryname' => 'nobleman',
                'vegetarian' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
