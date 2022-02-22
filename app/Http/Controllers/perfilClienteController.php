<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Models\perfilCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class perfilClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::select('CALL `fungdb`.`mostrar_cliente`('.Auth::user()->id.');');
        return view('perfilCliente', [ "clientes" => $clientes ]);
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
                Auth::user()->id.
            ');');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('perfilCliente.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        return redirect()->route('perfilCliente.index');
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
            return redirect()->route('perfilCliente.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        return redirect()->route('perfilCliente.index');
    }
}
