<?php

use Illuminate\Database\Seeder;

class CareDmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Care\CareDm::class, 500)->create();
    }
}
