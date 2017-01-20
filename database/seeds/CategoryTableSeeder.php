<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
// use Illuminate\Database\Eloquent\Model;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

     $faker=Faker::create();

      for($i = 0; $i < 20; $i++)
      {
          
          
          
            $id= \DB::table('categories')->insertGetId(array(
                 'name' => $faker->colorName  ,
            
          

			));



      }
	
	}

}