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
            [5,'Coca-Cola',1],
            [6,'Colanta',1],
            [7,'Alquería',1],
            [8,'Alpina',1],
            [9,'Diana',1],
            [10,'Margarita',1],
            [11,'Póker',1],
            [12,'Hit',1],
            [13,'Zenú',1],
            [14,'Bimbo',1],
            [15,'Águila',1],
            [16,'Jet',1],
            [17,'Familia',1],
            [18,'Ranchera',1],
            [19,'Rothmans Of London',1],
            [20,'Pony Malta',1],
            [21,'De Todito',1],
            [22,'Águila Light',1],
            [23,'Fruco',1],
            [24,'Nescafe',1],

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
