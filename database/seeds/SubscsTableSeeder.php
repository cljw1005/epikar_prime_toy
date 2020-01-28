<?php

use Illuminate\Database\Seeder;

class SubscsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Subsc\Subsc::class, 50)->create();
    }
}
