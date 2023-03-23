<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //   Antioqui
        DB::table('cities')->insert([
            'city_name' => 'Medellin',
            'img'=>'https://res.cloudinary.com/dbce4pgta/image/upload/v1679587224/Medellin_uzhrdb.jpg',
            'states_id' => 1,
        ]);

        DB::table('cities')->insert([
            'city_name' => 'Santa Fe',
            'img'=>'https://res.cloudinary.com/dbce4pgta/image/upload/v1679587352/Santafe_yih60o.jpg',
            'states_id' => 1,
        ]);



        //   Antioqui





    }
}
