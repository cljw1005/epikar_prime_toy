<?php

use Illuminate\Database\Seeder;

class VehicleDmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Vehicle\VehicleDm::class, 100)->create();
    }
}
