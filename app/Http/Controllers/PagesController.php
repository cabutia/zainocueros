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
        #  Soft  #
        "71,150,201", "71,201,150", "150,71,201", "150,201,71", "201,150,71", "201,71,150",
        #  Strong  #
        # "20,100,230", "20,230,100", "230,100,20", "230,20,100", "100,20,230", "100,230,100",
      ];
      $products = Product::where('published', '1')->get();
      foreach ($products as $product) { $product->background = $backgrounds[rand(0,count($backgrounds) - 1)]; }
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
      return dump($id);
    }

    public function show_product($id){
      $product = Product::find($id);
      return view('store.view-product')->with('product', $product);
    }
}
