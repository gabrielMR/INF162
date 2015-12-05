<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EnunciadoTableSeeder extends Seeder{

	public function run()
	{
		$faker=Faker::create();
		for ($i=0; $i < 10; $i++) { 

			$id=DB::table("enunciado")->insertGetId(array(
			'descripcion'  => $faker->paragraph(rand(2,5))
			));	
		}
	}
}