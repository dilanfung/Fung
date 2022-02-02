<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Necesitamos agregar el middleware que creamos anteriormente.

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('solouser',['only'=> ['index']]);
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('indexCliente');
    }
}
