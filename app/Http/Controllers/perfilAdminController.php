<?php

namespace App\Http\Controllers;

use DB;
use App\Models\perfilAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class perfilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
        $clientes = DB::select('CALL `fungdb`.`mostrar_cliente`('.$user.');');
        $usuarios = DB::select('CALL `fungdb`.`mostrar_clientes`();');
        return view('perfilAdmin', [ "clientes" => $clientes, "usuarios" => $usuarios ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //perfilAdmin::create($request->all());
        DB::select('CALL `fungdb`.`crear_vehiculo`('.
            '"'.$request->input('placa').'", '.
            '"'.$request->input('marca').'", '.
            '"'.$request->input('cilindraje').'", '.
            '"'.$request->input('modelo').'", '.
            '"'.$request->input('anio').'", '.
            $request->input('usuario').
        ');');
        return redirect()->route('perfilAdmin.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perfilAdmin  $perfilAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::select('CALL `fungdb`.`modificar_usuario`('.
            $id.', '.
            '"'.$request->input('Nombre').'", '.
            '"'.$request->input('Apellidos').'", '.
            '"'.$request->input('Correo').'", '.
            '"'.Hash::make($request->input('Clave')).'"'.
        ');');
        return redirect()->route('perfilAdmin.index');
    }
}
