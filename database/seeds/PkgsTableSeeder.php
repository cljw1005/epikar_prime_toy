<?php

use Illuminate\Database\Seeder;

class PkgsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Pkg\Pkg::class, 3)->create();
    }
}
