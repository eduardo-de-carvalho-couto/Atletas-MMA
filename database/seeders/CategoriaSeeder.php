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
            'capa' => 'categorias_capa/img-default.png'
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Galo',
            'capa' => 'categorias_capa/img-default.png'
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Pena',
            'capa' => 'categorias_capa/img-default.png'
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Leve',
            'capa' => 'categorias_capa/img-default.png'
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Meio Médio',
            'capa' => 'categorias_capa/img-default.png'
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Médio',
            'capa' => 'categorias_capa/img-default.png'
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Meio Pesado',
            'capa' => 'categorias_capa/img-default.png'
        ]);

        DB::table('categorias')->insert([
            'peso' => 'Pesado',
            'capa' => 'categorias_capa/img-default.png'
        ]);
    }
}