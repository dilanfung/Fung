<?php

namespace App\Http\Controllers;


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
        //
       
         $usuario = '2'; //test en lo que se averigua como sacar el usuario de session storage
         //->paginate(20); //resolver lo de la paginacion
         $vehiculos = DB::select('CALL `fungdb`.`mostrar_vehiculo_usuario`('.$usuario.');');
         return view('perfilClienteVehiculo', [ "vehiculos" => $vehiculos ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perfilclienteVehiculo  $perfilclienteVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(perfilclienteVehiculo $perfilclienteVehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perfilclienteVehiculo  $perfilclienteVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(perfilclienteVehiculo $perfilclienteVehiculo)
    {
        //
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
        //
        DB::select('CALL `fungdb`.`modificar_vehiculo_n`('.
        $request->input('id').',
        "'.$request->input('anio').'",
        "'.$request->input('cilindraje_motor').'",
        "'.$request->input('marca').'",
        "'.$request->input('modelo').'",
        "'.$request->input('placa').'");');
    
        return redirect()->route('perfilClienteVehiculo.index');
        
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
        return redirect()->route('perfilClienteVehiculo.index');
        
        //return response()->json($request);
    } 

} 
