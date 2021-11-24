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


class categoriasProveedorController extends Controller{


    public function index()
    {
 
        $categoriasProveedor = DB::select('CALL `fungdb`.`mostrar_todas_categorias`();');
        return view('categoriasProveedor', [ "categoriasProveedor" => $categoriasProveedor ]);
    }
    
    public function update(Request $request, $id)
    {
        DB::select('CALL `fungdb`.`modificar_categoria_proveedor`("'.
        $request->input('Id').'","'.
        $request->input('Nombre').'");');
        return redirect()->route('categoriasProveedor.index');
    }
}