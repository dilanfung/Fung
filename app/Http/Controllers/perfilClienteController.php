<?php

namespace App\Http\Controllers;

use DB;
use App\Models\perfilCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class perfilClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=Auth::user()->id;
        $clientes = DB::select('CALL `fungdb`.`mostrar_cliente`('.$user.');');
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
        perfilCliente::create($request->all());
        return view ("perfilCliente");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perfilCliente  $perfilCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::select('CALL `fungdb`.`modificar_usuario`("'.
        $request->input('Id').'","'.
        $request->input('Nombre').'","'.
        $request->input('Apellidos').'","'.
        $request->input('Correo').'");');
        return redirect()->route('perfilCliente.index');
    }
}
