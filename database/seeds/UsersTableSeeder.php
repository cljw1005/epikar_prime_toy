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
		$ids = \App\User::get()->pluck('user_dm_num_serial')->toArray();
		$userDm = \App\Models\User\UserDm::whereNotIn('user_dm_num_serial', $ids)->inRandomOrder()->first();

    	\App\User::create([
			'name' => 'test1',
			'email' => 'test1@epikar.com',
			'email_verified_at' => now(),
			'password' => '111111',
			'remember_token' => Str::random(10),

			'user_dm_dealer_group_code' => $userDm->dealer_group_code,
			'user_dm_num_serial' => $userDm->num_serial,
		]);

        factory(\App\User::class, 100)->create();
    }
}
