<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Models\perfilCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class perfilCliente2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('perfilCliente2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try { 
            DB::select('call `fungdb`.`eliminar_usuario`('.$id.');');
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('perfilCliente.index')
               ->with('alert_type', 'danger')->with('message', 'No es posible eliminar.');
        }
    
        return view('perfilCliente2');
    } 

}
