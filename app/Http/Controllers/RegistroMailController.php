<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailRegister;

class RegistroMailController extends Controller
{
    public function enviaRegistro(Request $requestRegistro){
        Mail::to('braindevprojeto@gmail.com')->send(new SendMailRegister($requestRegistro));
    }
}
