<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class citas_admin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = DB::select('CALL `fungdb`.`mostrar_todos_cita`();');
        $vehiculos = DB::select('CALL `fungdb`.`mostrar_todos_vehiculo`();');
        $usuarios = DB::select('CALL `fungdb`.`mostrar_clientes`();');
        $eventos = array();

        foreach($citas as $cita) {
            $eventos[] = [
                'title' => 'ID: '.$cita->id,
                'description' => 'Para más información, revisar la lista de citas.',
                'start' => date('Y-m-d H:i:s', str_replace(" ", "T", strtotime($cita->fecha))),
                'end' => date('Y-m-d H:i:s', str_replace(" ", "T", strtotime($cita->fecha." +1 hour"))),
                'className' => 'fc-bg-deepskyblue',
                'icon' => 'cog',
                'allDay'=> 'false'
            ];
        }

        return view('citasAdmin', [ 
            "citas" => $citas, 
            "vehiculos" => $vehiculos, 
            "usuarios" => $usuarios,
            "eventos" => $eventos 
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
        DB::select('CALL `fungdb`.`crear_cita`("'.
        $request->input('Fecha').' '.$request->input('Hora').':00'.'", '.
        $request->input('Usuario').', '.
        $request->input('Vehiculo').');');
        return redirect()->route('CitasAdmin.index');
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
        $id.', '.
        '"'.$request->input('Fecha').' '.$request->input('Hora').':00'.'", '.
        $request->input('Usuario').', '.
        $request->input('Vehiculo').');');
        return redirect()->route('CitasAdmin.index');
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
        return redirect()->route('CitasAdmin.index');
    }
}
