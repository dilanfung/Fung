<?php

namespace App\Http\Middleware;

//Necesitamos colocar esta ruta.
use Illuminate\Support\Facades\Auth;
use Closure;    
use Illuminate\Http\Request;


class SoloAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->tipo){
            case ('1'):
                return $next($request);//si es administrador continua al HOME
            break;
			case('2'):
                return redirect('user');// si es un usuario normal redirige a la ruta USER
			break;	
        }
    }}
