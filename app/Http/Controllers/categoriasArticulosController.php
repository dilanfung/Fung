<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use DB;


    /** 
     * 
     * @param
     * @return
     * 
     * public function index(){

      *  $clientesAdminV = DB::table('usuarios')->get();

       * return view('clientesAdmin', $clientesAdminV);
        

    *}

     * 
     * return view('clientesAdmin', $clientesAdminV);
     * 
     * **/


class categoriasArticulosController extends Controller{


    public function index()
    {
        $categoriasArticulos = DB::select('CALL `fungdb`.`mostrar_todas_categorias_articulos`();');
        return view('categoriasArticulos', [ "categoriasArticulos" => $categoriasArticulos,"categoriasArticulo" => $categoriasArticulos ]);
    }

    public function store(Request $request)
    {
        try {
            DB::select('CALL `fungdb`.`crear_categoria_articulo`("'.
            $request->input('Nombre').'");');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('categoriasArticulos.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        
        return redirect()->route('categoriasArticulos.index');
    }
    
    public function update(Request $request, $id)
    {
        try {
            DB::select('CALL `fungdb`.`modificar_categoria_articulo`("'.
                $request->input('Id').'","'.
                $request->input('Nombre').
            '");');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('categoriasArticulos.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        return redirect()->route('categoriasArticulos.index');
    }
}