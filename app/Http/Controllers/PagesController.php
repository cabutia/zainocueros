<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home.index');
    }

    public function products(){
      return view('store.index');
    }
}
