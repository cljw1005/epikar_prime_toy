<?php

use Illuminate\Database\Seeder;

class PkgProdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Pkg\PkgProd::class, 20)->create();
    }
}
