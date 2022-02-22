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
        $usuario = Auth::user()->id; 
        $citas = DB::select('CALL `fungdb`.`mostrar_cita`('.$usuario.');');
        $vehiculos = DB::select('CALL `fungdb`.`mostrar_vehiculo_usuario`('.$usuario.');');
        $eventos = array();
        //->paginate(20); //resolver lo de la paginacion

        foreach($citas as $cita) {
            $eventos[] = [
                'title' => 'ID: '.$cita->id.' - '.$cita->placa,
                'description' => 'Para más información, revisar la lista de citas.',
                'start' => date('Y-m-d H:i:s', str_replace(" ", "T", strtotime($cita->fecha))),
                'end' => date('Y-m-d H:i:s', str_replace(" ", "T", strtotime($cita->fecha." +1 hour"))),
                'className' => 'fc-bg-deepskyblue',
                'allDay'=> 'false'
            ];
        }

        return view('citasCliente', [ 
            "citas" => $citas, 
            "vehiculos" => $vehiculos, 
            "usuario" =>$usuario,
            "eventos" =>$eventos 
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
            DB::select('CALL `fungdb`.`crear_cita`("'.
                $request->input('Fecha').' '.$request->input('Hora').'", '.
                $request->input('Usuario').','.
                $request->input('Vehiculo').
            ');');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('CitasCliente.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        return redirect()->route('CitasCliente.index');
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
            DB::select('CALL `fungdb`.`modificar_cita`('.
                $id.', '.
                '"'.$request->input('Fecha').' '.$request->input('Hora').'", '.
                $request->input('Usuario').','.
                $request->input('Vehiculo').
            ');');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('CitasCliente.index')    
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos.');
        }

        return redirect()->route('CitasCliente.index');
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
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('CitasCliente.index')
                ->with('alert_type', 'danger')->with('message', 'No es posible eliminar la cita.');
        }
        return redirect()->route('CitasCliente.index');
    }
}
