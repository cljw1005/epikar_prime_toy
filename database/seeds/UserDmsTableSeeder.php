<?php

use Illuminate\Database\Seeder;

class UserDmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User\UserDm::class, 100)->create();
    }
}
