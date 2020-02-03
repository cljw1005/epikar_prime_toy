<?php

use Illuminate\Database\Seeder;

class VehicleCatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Vehicle\VehicleCat::class, 5)->create();
    }
}
