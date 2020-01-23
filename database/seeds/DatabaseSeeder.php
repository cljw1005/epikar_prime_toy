<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		if(config('database.default') !== 'sqlite') {
			DB::statement('SET FOREIGN_KEY_CHECKS=0');
		}

		\App\Models\Foo\Foo::truncate();
		$this->call(FoosTableSeeder::class);

		\App\Models\Vehicle\Vehicle::truncate();
		$this->call(VehiclesTableSeeder::class);

		\App\Models\Care\Care::truncate();
		$this->call(CaresTableSeeder::class);

		\App\Models\Prod\Prod::truncate();
		$this->call(ProdsTableSeeder::class);

		\App\Models\Pkg\Pkg::truncate();
		$this->call(PkgsTableSeeder::class);

		\App\Models\Pkg\PkgProd::truncate();
		$this->call(PkgProdTableSeeder::class);

		\App\Models\Sub\Sub::truncate();
		$this->call(SubsTableSeeder::class);

		if(config('database.default') !== 'sqlite') {
			DB::statement('SET FOREIGN_KEY_CHECKS=1');
		}
    }
}