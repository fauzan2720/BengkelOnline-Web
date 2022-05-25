<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(1)->create();
        \App\Models\Product::factory(1)->create();
        \App\Models\ProductGallery::factory(1)->create();
        \App\Models\Vehicle::factory(1)->create();
        \App\Models\Location::factory(7)->create();
    }
}
