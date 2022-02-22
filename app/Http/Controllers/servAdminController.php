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
        try {
            DB::select('CALL `fungdb`.`crear_servicio`('.
                '"'.$request->input('nombre').'", '.
                '"'.$request->input('descripcion').'", '.
                $request->input('costo').', '.
                '1'.', '. // ¿Es promoción? Verdadero
                '"'.$request->input('tiempo_estimado').
            '");');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('promocionesAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }

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
        try {
            DB::select('CALL `fungdb`.`modificar_servicio`('.
                $id.', '.
                '"'.$request->input('nombre').'", '.
                '"'.$request->input('descripcion').'", '.
                $request->input('costo').', '.
                '"'.$request->input('tiempo_estimado').
            '");');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('promocionesAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
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
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('promocionesAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'No es posible eliminar.');
        }
        return redirect()->route('promocionesAdmin.index');
        //return response()->json($request);
    } 
}
