<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;

class perfilAdminVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //->paginate(20); //resolver lo de la paginacion
        $vehiculos = DB::select('CALL `fungdb`.`mostrar_todos_vehiculo`();');
        return view('perfilAdminVehiculo', [ "vehiculos" => $vehiculos ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perfilAdminVehiculo  $perfilAdminVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::select('CALL `fungdb`.`modificar_vehiculo_n`('.
        $id.',
        "'.$request->input('anio').'",
        "'.$request->input('cilindraje_motor').'",
        "'.$request->input('marca').'",
        "'.$request->input('modelo').'",
        "'.$request->input('placa').'");');
    
        return redirect()->route('perfilAdminVehiculo.index');
        //return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perfilAdminVehiculo  $perfilAdminVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            DB::select('call `fungdb`.`ELIMINAR_VEHICULO`('.$id.');');
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->route('perfilAdminVehiculo.index');
        //return response()->json($request);
    } 
}





