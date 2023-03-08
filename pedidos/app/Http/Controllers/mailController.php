<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function index(){
        $mailData = ['title'=>'Correo prueba',
        'body'=>'prueba de envio desde gmail'];
        Mail::to('alba.alonso@ikasle.egibide.org')->send(new MailSender($mailData));
        //dd('el correo se ha mandado');
    }
}
