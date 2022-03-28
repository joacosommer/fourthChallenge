<?php

namespace Database\Seeders;

use App\Models\Aerolinea;
use App\Models\Ciudad;
use App\Models\Vuelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::factory(10)->create();
        Aerolinea::factory(5)->create();
        Vuelo::factory(10)->create();
        $ciudad = Ciudad::find(1);
        $aerolinea = Aerolinea::find(1);
        $ciudad->aerolinea()->attach($aerolinea);
    }
}
