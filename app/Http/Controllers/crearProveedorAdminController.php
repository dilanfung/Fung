<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class crearProveedorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedor = DB::select('CALL `fungdb`.`mostrar_todos_proveedores`();');
        $categorias = DB::select('CALL `fungdb`.`mostrar_todas_categorias`();');
        return view('crearProveedorAdmin', [ 
            "proveedor" => $proveedor,
            "proveedor2" => $proveedor,
            "categorias" => $categorias,
            "categoria" => $categorias 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if ($request->has('form1')) {
                DB::select('CALL `fungdb`.`crearProveedor`("'.
                    $request->input('Nombre').'","'.
                    $request->input('Direccion').'","'.
                    $request->input('Fecha').'","'.
                    $request->input('Cedula').'","'.
                    $request->input('Categoria').
                '");');
            }
    
            if ($request->has('form2')) {
                DB::select('CALL `fungdb`.`crear_categoria_proveedor`("'.
                    $request->input('NombreC').
                '");');
            }
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('crearProveedorAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        return redirect()->route('crearProveedorAdmin.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::select('CALL `fungdb`.`modificar_proveedor`("'.
                $request->input('IdM').'","'.
                $request->input('NombreM').'","'.
                $request->input('DireccionM').'","'.
                $request->input('FechaM').'","'.
                $request->input('CedulaM').
            '");');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('crearProveedorAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        
        return redirect()->route('crearProveedorAdmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::select('call `fungdb`.`eliminar_proveedor`("'.$id.'");');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('crearProveedorAdmin.index')  
                ->with('alert_type', 'danger')->with('message', 'No es posible eliminar.');
        }
        return redirect()->route('crearProveedorAdmin.index');
    }
}
