<?php
use Illuminate\Database\Seeder;
class AdminTableSeeder extends Seeder{

	public function run()
	{
		\DB::table("users")->insert(array(
			'name'  => 'brayan',
			'email' => 'picaro910@gmail.com',
			'password' => \Hash::make('secret'),
			'type' => 'admin'
		));
	}
}