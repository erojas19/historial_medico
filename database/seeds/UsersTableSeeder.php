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
      $users = array(
					array(
						'name' => 'Efrain Rojas',
						'email' => 'demo@gmail.com',
						'password' => Hash::make('123456')
					)
				);
			DB::table('users')->insert($users);
    }
}
