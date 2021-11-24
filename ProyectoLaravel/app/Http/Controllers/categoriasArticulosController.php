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
        return view('categoriasArticulos', [ "categoriasArticulos" => $categoriasArticulos ]);
    }

    public function store(Request $request)
    {


        DB::select('CALL `fungdb`.`crear_categoria_articulo`("'.
        $request->input('Nombre').'");');
        return redirect()->route('categoriasArticulos.index');
        
    }
    
    public function update(Request $request, $id)
    {
        DB::select('CALL `fungdb`.`modificar_categoria_articulo`("'.
        $request->input('Id').'","'.
        $request->input('Nombre').'");');
        return redirect()->route('categoriasArticulos.index');
    }
}