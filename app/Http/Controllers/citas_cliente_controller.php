<?php

namespace App\Http\Controllers;

//use DB;
use Illuminate\Http\Request;
use IlluminateSupportFacadesDB;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class citas_cliente_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$usuario->session()->get('id'); 
        $usuario = Auth::user()->id; 
        $usuario2 = Auth::user()->id;
        //->paginate(20); //resolver lo de la paginacion
        $citas = DB::select('CALL `fungdb`.`mostrar_cita`('.$usuario.');');
        $vehiculos = DB::select('CALL `fungdb`.`mostrar_vehiculo_usuario`('.$usuario.');');
        return view('citasCliente', [ "citas" => $citas, "vehiculos" => $vehiculos, "usuario" =>$usuario,"usuario2" =>$usuario2 ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::select('CALL `fungdb`.`crear_cita`("'.
        $request->input('Fecha').' '.$request->input('Hora').'", '.
        $request->input('Usuario').','.
        $request->input('Vehiculo').');');
        return redirect()->route('CitasCliente.index');
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
        DB::select('CALL `fungdb`.`modificar_cita`('.
        $id.',"'.
        $request->input('Fecha').' '.$request->input('Hora').':00", '.
        $request->input('Usuario').','.
        $request->input('Vehiculo').');');
        return redirect()->route('CitasCliente.index');
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
        try {
            DB::select('call `fungdb`.`eliminar_cita`('.$id.');');
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->route('CitasCliente.index');
    }
}
