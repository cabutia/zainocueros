<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $r)
    {
      $this->validate($r,[
        'email' => 'required',
        'password' => 'required'
      ]);
      $cred = [
        'email' => $r->get('email'),
        'password' => $r->get('password')
      ];
      if(Auth::attempt($cred)){
        return redirect(route('home'))->withErrors('Bienvenido ' . Auth::User()->name . '!');
      }else{
        return redirect(route('login'))->withInput()->withErrors('Usuario y/o contraseña invalidos');
      }
    }

    public function logout()
    {
      Auth::logout();
      return redirect(route('home'))->withErrors('Sesión cerrada correctamente.');
    }
}
