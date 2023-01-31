<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    public static function traerMarcas($buscar){

        if($buscar == ''){
            $marcas = Marca::orderBy('id', 'DESC')->paginate(2);
        }else{
            $marcas = Marca::where('nombre', 'like', '%' . $buscar . '%')->orderBy('id', 'DESC')->paginate(2);
        }

        return $marcas;

    }
}
