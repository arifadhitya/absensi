<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');

        for($x=0; $x<10; $x++){
        	DB::table('dosen')->insert([
        		'nama_dosen' => $faker->name,
        	])
        }
    }
}
