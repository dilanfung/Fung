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
        //$usuario->session()->get('id'); 
        $usuario = '2'; //test en lo que se averigua como sacar el usuario de session storage
        //->paginate(20); //resolver lo de la paginacion
        $proveedor = DB::select('CALL `fungdb`.`mostrar_todos_proveedores`();');
        $categorias = DB::select('CALL `fungdb`.`mostrar_todas_categorias`();');
        return view('crearProveedorAdmin', [ "proveedor" => $proveedor,"categorias" => $categorias  ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('form1')) {
            DB::select('CALL `fungdb`.`crearProveedor`("'.
            $request->input('Nombre').'","'.
            $request->input('Direccion').'","'.
            $request->input('Fecha').'","'.
            $request->input('Cedula').'","'.
            $request->input('Categoria').'");');
            return redirect()->route('crearProveedorAdmin.index');
        }

        if ($request->has('form2')) {
            DB::select('CALL `fungdb`.`crear_categoria_proveedor`("'.
            $request->input('NombreC').'");');
            return redirect()->route('crearProveedorAdmin.index');
        }
        
       // return redirect()->route('crearProveedorAdmin.index');
        //return response()->json($request);
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
        DB::select('CALL `fungdb`.`modificar_proveedor`("'.
        $request->input('IdM').'","'.
        $request->input('NombreM').'","'.
        $request->input('DireccionM').'","'.
        $request->input('FechaM').'","'.
        $request->input('CedulaM').'","'.
        $request->input('CategoriaM').'");');
        return redirect()->route('crearProveedorAdmin.index');
        //return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select('call `fungdb`.`eliminar_proveedor`("'.$id.'");');
        return redirect()->route('crearProveedorAdmin.index');
    }
}
