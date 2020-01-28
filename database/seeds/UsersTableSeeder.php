<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\User::create([
			'name' => 'test1',
			'email' => 'test1@epikar.com',
			'email_verified_at' => now(),
			'password' => '111111',
			'remember_token' => Str::random(10),
		]);

        factory(\App\User::class, 100)->create();
    }
}
