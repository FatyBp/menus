<?php

namespace Database\Seeders;

use Database\Factories\InformacionFactory;
use Database\Factories\MenuFactory;
use Database\Factories\TrabajoFactory;
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
        InformacionFactory::factoryForModel('informacion')->count(20)->create();
        MenuFactory::factoryForModel('menu')->count(20)->create();
        TrabajoFactory::factoryForModel('trabajo')->count(20)->create();
        // \App\Models\User::factory(10)->create();
    }
}
