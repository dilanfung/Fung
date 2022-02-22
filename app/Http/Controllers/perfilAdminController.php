<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Models\perfilAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        try {
            DB::select('CALL `fungdb`.`crear_vehiculo`('.
                '"'.$request->input('placa').'", '.
                '"'.$request->input('marca').'", '.
                '"'.$request->input('cilindraje').'", '.
                '"'.$request->input('modelo').'", '.
                '"'.$request->input('anio').'", '.
                $request->input('usuario').
            ');');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('perfilAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        
        return redirect()->route('perfilAdmin.index');
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
            DB::select('CALL `fungdb`.`modificar_usuario`('.
                $id.', '.
                '"'.$request->input('Nombre').'", '.
                '"'.$request->input('Correo').'", '.
                '"'.Hash::make($request->input('Clave')).'"'.
            ');');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('perfilAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        
        return redirect()->route('perfilAdmin.index');
    }
}
