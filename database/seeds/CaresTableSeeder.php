<?php

use Illuminate\Database\Seeder;

class CaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Care\Care::class, 100)->create();
    }
}
