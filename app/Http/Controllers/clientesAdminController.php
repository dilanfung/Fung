<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;

class clientesAdminController extends Controller{


    public function index()
    {
        $clientes = DB::select('CALL `fungdb`.`mostrar_clientes`();');
        $clientes2 = DB::select('CALL `fungdb`.`mostrar_clientes`();');
        return view('clientesAdmin', [ "clientesAdmin" => $clientes,"clientesAdmin2" => $clientes2 ]);
    }
    
    public function update(Request $request, $id)
    {
        DB::select('CALL `fungdb`.`modificar_usuario_admin`("'.
        $id.'","'.
        $request->input('name').'","'.
        $request->input('email').'");');
        return redirect()->route('clientesAdmin.index');
    }
}