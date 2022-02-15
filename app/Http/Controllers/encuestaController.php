<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class encuestaController extends Controller
{
    public function index()
    {
        return view('encuesta');
    }

    public function store(Request $request)
    {
        $user=Auth::user()->id;
        DB::select('CALL `fungdb`.`crear_Encuesta`('
        .$user.');');

        $preg1='1';
        DB::select('CALL `fungdb`.`crear_RespEncuesta`('.$preg1.',' .$user. ','.$request->input('rating-star').');');

        $preg2='2';
        DB::select('CALL `fungdb`.`crear_RespEncuesta`('.$preg2.',' .$user. ','.$request->input('rating-star2').');');

        $preg3='3';
        DB::select('CALL `fungdb`.`crear_RespEncuesta`('.$preg3.',' .$user. ','.$request->input('rating-star3').');');

        return redirect()->route('feedbackCliente');
    }
}