<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use DB;


    /** 
     * 
     * @param
     * @return
     * 
     * public function index(){

      *  $clientesAdminV = DB::table('usuarios')->get();

       * return view('clientesAdmin', $clientesAdminV);
        

    *}

     * 
     * return view('clientesAdmin', $clientesAdminV);
     * 
     * **/


class retroalimentacionController extends Controller{


    public function index()
    {
 
        $retroalimentacion = DB::select('CALL `fungdb`.`mostrar_todos_retroalimentacion`();');
        return view('retroalimentacion', [ "retroalimentacion" => $retroalimentacion ]);
    }
}