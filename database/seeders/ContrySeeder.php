<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contries')->insert([
            'contries_name' => 'Colombia',
        ]);
        // DB::table('contries')->insert([
        //     'contries_name' => 'Brasil',
        // ]);
        // DB::table('contries')->insert([
        //     'contries_name' => 'Brasil',
        // ]);
    }
}
