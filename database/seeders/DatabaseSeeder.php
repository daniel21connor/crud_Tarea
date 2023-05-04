<?php

namespace Database\Seeders;

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

        Transporte::factory(100)->create();
        Camion::factory(100)->create();
        Personas::factory(100)->create();

    }


}
