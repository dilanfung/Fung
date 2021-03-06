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
        return view('categoriasProveedor', [ "categoriasProveedor" => $categoriasProveedor,"categoriasProveedor2" => $categoriasProveedor ]);
    }
    
    public function update(Request $request, $id)
    {
        try {
            DB::select('CALL `fungdb`.`modificar_categoria_proveedor`("'.
                $request->input('Id').'","'.
                $request->input('Nombre').
            '");');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('categoriasProveedor.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        return redirect()->route('categoriasProveedor.index');
    }
}