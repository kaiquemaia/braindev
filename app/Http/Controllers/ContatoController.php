<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;

class ContatoController extends Controller
{
    public function enviaContato(Request $request){
        Mail::to('braindevprojeto@gmail.com')->send(new SendMailUser($request));
    }
}
