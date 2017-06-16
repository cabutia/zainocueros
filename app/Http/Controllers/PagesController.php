<?php

namespace App\Http\Controllers;

use \App\Product;
use \App\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home.index');
    }

    public function products(){
      $backgrounds = [
        "71,150,201", "71,201,150", "150,71,201", "150,201,71", "201,150,71", "201,71,150",
        # "20,100,230", "20,230,100", "230,100,20", "230,20,100", "100,20,230", "100,230,100",
      ];
      $products = Product::where('published', '1')->get();
      $categories = Category::all();
      foreach ($products as $product) { $product->background = $backgrounds[rand(0,count($backgrounds) - 1)]; }
      return view('store.index')->with(['products' => $products->sortByDesc('id'), 'categories' => $categories]);
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
      $categories = Category::all();
      return view('store.admin.upload-product')->with([
        "categories" => $categories
      ]);
    }

    public function product_edit($id){
      $product = Product::find($id);
      return view('store.edit-product')->with([
        'product' => $product,
        'bodyColor' => 'grey lighten-3'
      ]);
    }

    public function product_show($id){
      $product = Product::find($id);
      $tags = explode(',', $product->tags);
      return view('store.view-product')->with([
        'product' => $product,
        'tags' => $tags,
        'bodyColor' => 'grey lighten-3'
      ]);
    }
}
