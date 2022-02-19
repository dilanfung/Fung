<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DoctrineDBALDriverPDOConnection;

class feedbackClienteController extends Controller
{
    public function index()
    {
        $categorias = DB::select('CALL `fungdb`.`mostrar_todos_categoria_retroalimentacion`');
        return view('feedbackCliente', [ "categorias" => $categorias ]);
    }

    public function store(Request $request)
    {
        DB::select('CALL `fungdb`.`crear_retroalimentacion`('.
        $request->input('categoria_rtr').', '.
        '"'.$request->input('mensaje').'", '.
        Auth::user()->id.');');
        return redirect()->route('feedbackCliente.index');
    }
}