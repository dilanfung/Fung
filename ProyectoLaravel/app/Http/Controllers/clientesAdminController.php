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


class clientesAdminController extends Controller{


    public function index()
    {
 
        $clientes = DB::select('CALL `fungdb`.`mostrar_clientes`();');
        return view('clientesAdmin', [ "clientesAdmin" => $clientes ]);
    }
    
    public function update(Request $request, $id)
    {
        DB::select('CALL `fungdb`.`modificar_usuario`("'.
        $request->input('Id').'","'.
        $request->input('Nombre').'","'.
        $request->input('Apellidos').'","'.
        $request->input('Correo').'");');
        return redirect()->route('clientesAdmin.index');
    }
}