<?php

use Illuminate\Database\Seeder;

class BukutamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();
       for ($i=0; $i<=500; $i++) { 
        	DB::table('t_tamu')->insert([
	            'nama' => $faker->name,
	            'email' => $faker->unique()->email,
	            'no_hp' => $faker->phoneNumber,
	            'asal' => $faker->address,
	            'lokasi_id' => 1
	        ]);
        }
    }
}
