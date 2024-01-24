<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SpedCodeSeeder extends Seeder
{
    public function run(): void
    {
        $date = date('Y-m-d h:i:s', time());

        DB::table('sped_codes')->insert([
            'sped_code' => 1,
            'sped_description' => 'Matéria-prima',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 2,
            'sped_description' => 'Embalagem',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 3,
            'sped_description' => 'Produto em Processo',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 4,
            'sped_description' => 'Produto Acabado',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 5,
            'sped_description' => 'Subproduto',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 6,
            'sped_description' => 'Produto intermediário',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 7,
            'sped_description' => 'Material de uso e consumo',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 8,
            'sped_description' => 'Ativo imobilizado',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 9,
            'sped_description' => 'Serviços',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('sped_codes')->insert([
            'sped_code' => 10,
            'sped_description' => 'Outros insumos',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        

    }
}
