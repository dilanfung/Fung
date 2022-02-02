<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Necesitamos agregar el middleware que creamos anteriormente.

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('solouser',['only'=> ['index']]);
    } 

    public function index()
    {
        return view('indexCliente');
    }
}
