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

    public function register(){
      return view('auth.register')->with([
        "noFooter" => "true",
        "bodyColor" => "blue-grey"
      ]);
    }

    public function login(){
      return view('auth.login')->with([
        "noFooter" => "true",
        "bodyColor" => "blue darken-1"
      ]);
    }

    public function item_upload(){
      return view('store.admin.upload-product')->with([
        "noFooter" => "true"
      ]);
    }
}
