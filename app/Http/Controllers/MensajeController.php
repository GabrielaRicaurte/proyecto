<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MensajeController extends Controller
{
    public function store(){
        request()->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'mensaje' => 'required'
        ]);

        Mail::to('gabyruizricaurte2004@gmail.com')->send(new MessageReceived);


        return 'Mensage enviado';
    }
}

