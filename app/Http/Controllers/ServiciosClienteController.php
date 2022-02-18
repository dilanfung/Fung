<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;

class ServiciosClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = DB::select('CALL `fungdb`.`mostrar_servicios`');
        $promos = DB::select('CALL `fungdb`.`mostrar_promociones`');
        return view('serviciosCliente', [ "servicios" => $servicios, "promos" => $promos ]);
    }
}
