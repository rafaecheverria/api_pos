<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas = [
            [1,'Nestle',1],
            [2,'CCU',1],
            [3,'Soprole',1],
            [4,'Costa',1],
        ];

        $marcas = array_map(function($marca){
            return [
                'id' => $marca[0],
                'nombre' => $marca[1],
                'estado' => $marca[2],
            ];
         }, $marcas);
         DB::table('marcas')->insert($marcas);
    }
}
