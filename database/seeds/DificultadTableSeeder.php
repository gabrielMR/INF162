<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DificultadTableSeeder extends Seeder{

	public function run()
	{
		$faker=Faker::create();
		$diff = array("A", "B", "C");
		for ($i=0; $i < 3; $i++) { 

			DB::table("dificultad")->insertGetId(array(
			'tipo'  => $diff[$i]

			));	
		}
		for ($i=0; $i <10 ; $i++) { 
			DB::table("codigo")->insertGetId(array(
			'codigo'  => '#include <bits/stdc++.h>
						  using namespace std;
						  int main(){
							printf("%s\n", "hola mundo'.$i.'");
							return 0;	
				}'

			));	
		}
	}
}