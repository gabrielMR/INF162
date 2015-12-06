<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder{

	public function run()
	{
		$faker=Faker::create();
		for ($i=0; $i < 15; $i++) { 

			DB::table("users")->insertGetId(array(
			'name'  => $faker->firstName.' '.$faker->lastName,
			'email' => $faker->unique()->email(),
			'password' => \Hash::make('123456'),
			
			));	
		}
		for ($i=0; $i < 5; $i++) { 

			$id=DB::table("persona")->insertGetId(array(
			'nombre'  => $faker->firstName.' '.$faker->lastName,
			'fecha_naci'=>$faker->date($format='Y-m-d',$max='now'),
			'tipo'=>'jefe',
			'email'=>$faker->userName."@duff.com",
			'password' => \Hash::make('123456')
			));	
		}
	}
}