<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;

class feedbackAdminController extends Controller
{
    public function index()
    {
        $encuestas = DB::select('CALL `fungdb`.`mostrar_todas_encuesta_satisfaccion`');
        $preguntas = DB::select('CALL `fungdb`.`mostrar_todas_pregunta_encuesta`');
        return view('feedbackAdmin', [ "encuestas" => $encuestas, "preguntas" => $preguntas ]);
    }
}
