<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date('Y-m-d h:i:s', time());

        DB::table('product_types')->insert([
            'type_code' => 'AD',
            'type_name' => 'ADESIVOS E RÓTULOS',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        
        DB::table('product_types')->insert([
            'type_code' => 'AP',
            'type_name' => 'AGUA PERFUMADA',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        
        DB::table('product_types')->insert([
            'type_code' => 'AR',
            'type_name' => 'AROMATIZADOR DE AMBIENTE',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        
        DB::table('product_types')->insert([
            'type_code' => 'BS',
            'type_name' => 'BASE PARA SABONETE LÍQUIDO',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
