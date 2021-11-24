<?php

namespace App\Http\Controllers;

use App\Models\perfilAdmin;
use Illuminate\Http\Request;

class perfilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       
        return view ('perfilAdmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ("perfilAdmin.blade.php");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$perfilAdmin = new perfilAdmin($request->input());
    //$perfilAdmin->saveOrFail();
    //return redirect()->route("perfilesAdmin.perfilAdmin")->with(["mensaje" => "vehiculo guardado",   ]);
    perfilAdmin::create($request->all());
        return view ("perfilAdmin");
        
   
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perfilAdmin  $perfilAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(perfilAdmin $perfilAdmin)
    {
        //
       
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perfilAdmin  $perfilAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(perfilAdmin $perfilAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perfilAdmin  $perfilAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perfilAdmin $perfilAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perfilAdmin  $perfilAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(perfilAdmin $perfilAdmin)
    {
        //
    }
}
