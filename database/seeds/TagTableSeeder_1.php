<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
// use Illuminate\Database\Eloquent\Model;

class TagTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

     $faker=Faker::create();

      for($i = 0; $i < 10; $i++)
      {
          
          
          
            $id= \DB::table('tags')->insertGetId(array(
            'name'           => $faker->word ,
            
          

			));



      }
	
	}

}