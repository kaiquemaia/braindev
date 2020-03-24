<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planos;


class PlanosController extends Controller
{
    public function listarPlanos() {
            
        $planos = Planos::all();
        
        return view('index')->with('planos', $planos);

    }
}