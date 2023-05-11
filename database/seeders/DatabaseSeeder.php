<?php

namespace Database\Seeders;

use App\Models\mercancia;
use App\Models\Predio;
use App\Models\Tipo_mercancia;
use Illuminate\Database\Seeder;

use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Personas;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
        public function run(): void
    {

        Transporte::factory(50)->create();
        Camion::factory(50)->create();
        Personas::factory(50)->create();
        Predio::factory(50)->create();
        Tipo_mercancia::factory(50)->create();
       mercancia::factory(50)->create();

    }


}
