<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->buscar;
        $marcas = Marca::traerMarcas($buscar);

        return [
            'pagination' => [
                'total'        => $marcas->total(),
                'current_page' => $marcas->currentPage(),
                'per_page'     => $marcas->perPage(),
                'last_page'    => $marcas->lastPage(),
                'from'         => $marcas->firstItem(),
                'to'           => $marcas->lastItem(),
            ],
            'marcas' => $marcas,
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Marca = new Marca();
        $Marca->nombre = $request->nombre;
        $Marca->save();
        //return $request->nombre;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function getMarca($id)
    {

        $marca = Marca::findOrFail($id);
        return response()->json([
            'marca' => $marca,
        ]);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        $marca->nombre = $request->nombre;
        $marca->save();
        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        $marca->estado = 0;
        $marca->save();
        return $marca;
    }
}
