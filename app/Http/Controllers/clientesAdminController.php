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
        try {
            DB::select('CALL `fungdb`.`modificar_usuario_admin`('.
                $id.', '.
                '"'.$request->input('name').'", '.
                '"'.$request->input('email').'"'.
            ');');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('clientesAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        return redirect()->route('clientesAdmin.index');
    }

    public function destroy($id)
    {
        
        try { 
            DB::select('call `fungdb`.`eliminar_usuario`('.$id.');');
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('perfilCliente.index')
               ->with('alert_type', 'danger')->with('message', 'No es posible eliminar.');
        }
    
        return redirect()->route('clientesAdmin.index');
    } 
}