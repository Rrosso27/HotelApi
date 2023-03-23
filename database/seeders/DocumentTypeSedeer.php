<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  DB;
class DocumentTypeSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('document_types')->insert([
            'type_documen' => 'CC',
        ]);

        DB::table('document_types')->insert([
            'type_documen' => 'Pasaporte',
        ]);

        DB::table('document_types')->insert([
            'type_documen' => 'Documento extranjero ',
        ]);
    }
}
