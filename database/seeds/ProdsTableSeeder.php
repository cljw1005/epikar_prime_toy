<?php

use Illuminate\Database\Seeder;

class ProdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Prod\Prod::class, 10)->create();
    }
}
