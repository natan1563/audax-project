<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Request;
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
        \App\Models\User::factory(15)->create();
        Material::factory(15)->create();
        Request::factory(15)->create();
    }
}
