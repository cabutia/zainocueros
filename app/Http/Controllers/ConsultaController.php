<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ConsultaController extends Controller
{
    public function send(Request $r)
    {
      Mail::send(
        ["text" => "mailables.consulta"],
        [
          "name" => $r->get('name'),
          "contact" => $r->get('phone'),
          "details" => $r->get('details')
        ],
        function($m){
          $m->to('leandrogrotnig11@gmail.com', 'Consulta')->subject("Consulta");
          $m->from('leandrogrotnig11@gmail.com', 'Consultas: Zaino Cueros');
        });

      return redirect($this->getRedirectUrl())->withErrors("Consulta enviada!");
    }
}
