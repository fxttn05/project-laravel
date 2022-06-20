<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 4; $i++){
 
        $gender = $faker->randomElement($array = array('male','female','mixed'));

    	DB::table('pegawai')->insert([
    		'nama' => $faker->firstName($gender),
            'jeniskelamin' => $faker->randomElement(['Male', 'Female', 'Other']),
    		'notelp' => $faker->e164PhoneNumber
    	]);

        }

        
    }
}

