<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;

class feedbackClienteController extends Controller
{
    public function index()
    {
        $categorias = DB::select('CALL `fungdb`.`mostrar_todos_categoria_retroalimentacion`');
        return view('feedbackCliente', [ "categorias" => $categorias ]);
    }

    public function store(Request $request)
    {
        //2 = usuario de ejemplo
        DB::select('CALL `fungdb`.`crear_retroalimentacion`('.
        $request->input('categoria_rtr').', '.
        '"'.$request->input('mensaje').'", '.
        '2'.');');
        return redirect()->route('feedbackCliente.index');
    }
}