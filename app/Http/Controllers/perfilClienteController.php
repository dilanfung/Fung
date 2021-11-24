<?php

namespace App\Http\Controllers;

use DB;
use App\Models\perfilCliente;
use Illuminate\Http\Request;

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
        $clientes = DB::select('CALL `fungdb`.`mostrar_clientes`();');
        return view('perfilCliente', [ "clientes" => $clientes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view ("perfilCliente.blade.php");
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

        perfilCliente::create($request->all());
        return view ("perfilCliente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perfilCliente  $perfilCliente
     * @return \Illuminate\Http\Response
     */
    public function show(perfilCliente $perfilCliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perfilCliente  $perfilCliente
     * @return \Illuminate\Http\Response
     */
    public function edit(perfilCliente $perfilCliente)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perfilCliente  $perfilCliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(perfilCliente $perfilCliente)
    {
        //
    }
}
