<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RubrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Rubro', 10)->create();
    }
}
