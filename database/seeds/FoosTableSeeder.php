<?php

use Illuminate\Database\Seeder;

class FoosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(\App\Models\Foo\Foo::class, 10)->create();
    }
}
