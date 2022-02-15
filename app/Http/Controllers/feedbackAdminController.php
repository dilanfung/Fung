<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;

class feedbackAdminController extends Controller
{
    public function index()
    {
        $retroalimentaciones = DB::select('CALL `fungdb`.`mostrar_todos_retroalimentacion`');
        $preguntas = DB::select('CALL `fungdb`.`mostrar_todas_pregunta_encuesta`');
        return view(
            'feedbackAdmin', 
            [ "retroalimentaciones" => $retroalimentaciones, "preguntas" => $preguntas ]
        );
    }
}
