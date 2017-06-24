<?php

namespace App\Http\Controllers;

use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $r)
    {

      $this->validate($r,[
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'password' => 'required',
        'password_confirm' => 'same:password'
      ]);

      $userData = [
        "name" => $r->get('name'),
        "email" => $r->get('email'),
        "password" => Hash::make($r->get('password'))
      ];

      if(User::create($userData)){
        return redirect(route('home'))->withErrors('Usuario '. $r->email . ' creado!');
      }

    }
}
