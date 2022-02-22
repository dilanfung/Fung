<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;

class perfilclienteVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //->paginate(20); //resolver lo de la paginacion
        $vehiculos = DB::select('CALL `fungdb`.`mostrar_vehiculo_usuario`('. Auth::user()->id. ');');
        return view('perfilClienteVehiculo', [ "vehiculos" => $vehiculos ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perfilclienteVehiculo  $perfilclienteVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        try {
            DB::select('CALL `fungdb`.`modificar_vehiculo_n`('.
                $id.',
                "'.$request->input('anio').'",
                "'.$request->input('cilindraje_motor').'",
                "'.$request->input('marca').'",
                "'.$request->input('modelo').'",
                "'.$request->input('placa').
            '");');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('perfilClienteVehiculo.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        return redirect()->route('perfilClienteVehiculo.index');
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
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('perfilClienteVehiculo.index')
                ->with('alert_type', 'danger')->with('message', 'No es posible eliminar.');
        }
        return redirect()->route('perfilClienteVehiculo.index');
    } 
} 
