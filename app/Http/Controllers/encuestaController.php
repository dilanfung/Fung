<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class encuestaController extends Controller
{
    public function index() { return view('encuesta'); }

    public function store(Request $request)
    {
        $user=Auth::user()->id; $preg1='1'; $preg2='2'; $preg3='3';
        try {
            DB::select('CALL `fungdb`.`crear_Encuesta`('.$user.');');
            DB::select('CALL `fungdb`.`crear_RespEncuesta`('.$preg1.',' .$user. ','.$request->input('rating-star').');');
            DB::select('CALL `fungdb`.`crear_RespEncuesta`('.$preg2.',' .$user. ','.$request->input('rating-star2').');');
            DB::select('CALL `fungdb`.`crear_RespEncuesta`('.$preg3.',' .$user. ','.$request->input('rating-star3').');');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('feedbackCliente.index')
                ->with('alert_type', 'danger')->with('message', 'Usted ya ha enviado una encuesta de satisfacción previamente.');
        }
        return redirect()->route('feedbackCliente.index')
            ->with('alert_type', 'success')->with('message', 'Encuesta creada correctamente.');
    }
}