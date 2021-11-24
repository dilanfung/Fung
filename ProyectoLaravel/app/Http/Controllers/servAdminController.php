<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;

/* -------------------------------
CONTROLLER DE servAdmin (Promociones)
------------------------------- */

class servAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = DB::select('CALL `fungdb`.`mostrar_promociones`');
        return view('servAdmin', [ "servicios" => $servicios ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::select('CALL `fungdb`.`crear_servicio`('.
        '"'.$request->input('nombre').'", '.
        '"'.$request->input('descripcion').'", '.
        $request->input('costo').', '.
        '1'.', '. // ¿Es promoción? Verdadero
        '"'.$request->input('tiempo_estimado').'");');
        return redirect()->route('promocionesAdmin.index');
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
        DB::select('CALL `fungdb`.`modificar_servicio`('.
        $id.', '.
        '"'.$request->input('nombre').'", '.
        '"'.$request->input('descripcion').'", '.
        $request->input('costo').', '.
        '"'.$request->input('tiempo_estimado').'");');
        return redirect()->route('promocionesAdmin.index');
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
            DB::select('call `fungdb`.`eliminar_servicio`('.$id.');');
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->route('promocionesAdmin.index');
        //return response()->json($request);
    } 
}
