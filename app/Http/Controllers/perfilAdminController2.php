<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Models\perfilAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class perfilAdminController2 extends Controller
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

    public function store(Request $request)
    {
        try {
            DB::select('CALL `fungdb`.`modificar_usuario_admin_c`('.
            '"'.$request->input('CorreoC').'", '.
            '"'.Hash::make($request->input('ClaveC')).'"'.
            ');');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('perfilAdmin.index')
                ->with('alert_type', 'danger')->with('message', 'Uno de los valores no es válido, por favor llene todos los campos correctamente.');
        }
        
        return redirect()->route('perfilAdmin.index');
    }
}
