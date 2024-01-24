<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesureUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date('Y-m-d h:i:s', time());

        DB::table('mesure_units')->insert([
            'unit_short' => "KG",
            'unit_name' => 'Quilograma',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('mesure_units')->insert([
            'unit_short' => "ML",
            'unit_name' => 'Mililitro',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('mesure_units')->insert([
            'unit_short' => "UN",
            'unit_name' => 'Unidade',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('mesure_units')->insert([
            'unit_short' => "PC",
            'unit_name' => 'Peça',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('mesure_units')->insert([
            'unit_short' => "L",
            'unit_name' => 'Litro',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('mesure_units')->insert([
            'unit_short' => "M",
            'unit_name' => 'Metro',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
