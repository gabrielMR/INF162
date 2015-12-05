<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PersonalTableSeeder extends Seeder{

	public function run()
	{
		$sexo = array('Masculino','Femenino');
		$faker=Faker::create();
		for ($i=0; $i < 10; $i++) { 

			$id=DB::table("persona")->insertGetId(array(
			'nombre'  => $faker->firstName.' '.$faker->lastName,
			'fecha_naci'=>$faker->date($format='Y-m-d',$max='now'),
			'tipo'=>'normal'
			));	
		}
		for ($i=0; $i < 10; $i++) { 

			$id=DB::table("horario")->insertGetId(array(
			'hora'  => $faker->time($format='H:i:s',$max='now')
			));	
		}
	}
}