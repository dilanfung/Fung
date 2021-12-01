<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class feedbackClienteController extends Controller
{
    public function index()
    {
        return view('feedbackCliente');
    }
}
