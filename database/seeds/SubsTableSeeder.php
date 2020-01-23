<?php

use Illuminate\Database\Seeder;

class SubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Sub\Sub::class, 50)->create();
    }
}
