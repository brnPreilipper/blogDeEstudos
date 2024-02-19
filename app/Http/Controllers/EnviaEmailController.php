<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail; 

class EnviaEmailController extends Controller
{
    public function index(){
        $result = Mail::to("brnpreilipper09@gmail.com")->send(new SendMail("mensagem de teste", "Bruno"));

        return ($result) ? "E-mail enviado" : "erro";
    }
}
