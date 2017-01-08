<?php

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

	
		\DB::table('users')->insert(array(
            'name'     => 'jinmy solis',
            'email'          => 'solisjinmy@gmail.com',
            'password'       => \Hash::make('137525627jinmy'),
            'type'           => 'Admin',
           

			));


		
	}

}