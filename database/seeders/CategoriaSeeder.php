<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'peso' => 'Mosca',
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Galo',
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Pena',
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Leve',
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Meio Médio',
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Médio',
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Meio Pesado',
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Pesado',
        ]);
    }
}