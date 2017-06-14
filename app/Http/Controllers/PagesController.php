<?php

namespace App\Http\Controllers;

use \App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home.index');
    }

    public function products(){
      $backgrounds = [
        '71,201,133',
        '71,133,201',
        '201,71,133',
        '201,133,71',
        '133,71,201',
        '133,201,71'
      ];
      $products = Product::where('published', '1')->get();
      foreach ($products as $product) {
        $product->background = $backgrounds[rand(0,count($backgrounds) - 1)];
      }
      return view('store.index')->with('products', $products);
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

    public function product_edit($id){
      return dump($id );
    }
}
