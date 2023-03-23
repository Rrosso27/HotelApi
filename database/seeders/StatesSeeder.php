<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            'state_name' => 'Antioquia',
            'contries_id' => 1,
        ]);
        DB::table('states')->insert([
            'state_name' => 'Atlantico',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Amazonas',
            'contries_id' => 1,
        ]);


        DB::table('states')->insert([
            'state_name' => 'La  guajira',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Magdalena',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Cesar',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Bolivar',
            'contries_id' => 1,
        ]);


        DB::table('states')->insert([
            'state_name' => 'Santander',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Boyaca',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Arauca',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Vichada',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Guainia',
            'contries_id' => 1,
        ]);


        DB::table('states')->insert([
            'state_name' => 'Guaviare',
            'contries_id' => 1,
        ]);


        DB::table('states')->insert([
            'state_name' => 'Vaupes',
            'contries_id' => 1,
        ]);

        DB::table('states')->insert([
            'state_name' => 'Putumayo',
            'contries_id' => 1,
        ]);


        DB::table('states')->insert([
            'state_name' => 'Nariño',
            'contries_id' => 1,
        ]);




    }
}
