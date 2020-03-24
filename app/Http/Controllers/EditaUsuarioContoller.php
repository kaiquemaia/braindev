<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class EditaUsuarioContoller extends Controller
{
    public function editaUsuario(Request $request) 
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->input('name'),
            'empresa' => $request->input('empresa'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'cpf' => $request->input('cpf'),
            'cnpj' => $request->input('cnpj'),
            'cidade' =>$request->input('cidade'),
            'endereco' =>$request->input('endereco'),
            'numero' =>$request->input('numero'),
            'cep' => $request->input('cep'),
        ]);

        return view('home');

    }
}
