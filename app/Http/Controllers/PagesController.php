<?php

namespace App\Http\Controllers;

use Auth;
use \App\Product;
use \App\Category;
use \App\Subcategory;
use \App\CartRequest;
use \App\ShoppingCart;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      $sliderProducts = Product::take(5)->get();
      return view('home.index')->with('sliderproducts', $sliderProducts);
    }

    public function products(){
      $backgrounds = [
        "71,150,201", "71,201,150", "150,71,201", "150,201,71", "201,150,71", "201,71,150",
        # "20,100,230", "20,230,100", "230,100,20", "230,20,100", "100,20,230", "100,230,100",
      ];
      $products = Product::where('published', '1')->inRandomOrder()->get()->take(27);
      $categories = Category::all();
      foreach ($products as $product) { $product->background = $backgrounds[rand(0,count($backgrounds) - 1)]; }
      return view('store.index')->with(['products' => $products, 'categories' => $categories]);
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
      $categories = Category::all();
      $products = Product::all();
      $product = Product::find($id);
      return view('store.admin.edit-product')->with([
        'products' => $products,
        'categories' => $categories,
        'product' => $product,
        'bodyColor' => 'grey lighten-3'
      ]);
    }

    public function product_show($id, $slug){
      $product = Product::find($id);
      $products = Product::all();
      $tags = explode(',', $product->tags);
      return view('store.view-product')->with([
        'products' => $products->sortByDesc('id'),
        'product' => $product,
        'tags' => $tags,
        'bodyColor' => 'grey lighten-3'
      ]);
    }

    public function cat_filtered_product_list($category, $subcat){
      $backgrounds = [
        "71,150,201", "71,201,150", "150,71,201", "150,201,71", "201,150,71", "201,71,150",
        # "20,100,230", "20,230,100", "230,100,20", "230,20,100", "100,20,230", "100,230,100",
      ];
      $sc = Subcategory::where('slug', $subcat)->first();
      $products = Product::where(['published' => '1', 'category_id' => $sc->id])->get();
      $categories = Category::all();
      foreach ($products as $product) { $product->background = $backgrounds[rand(0,count($backgrounds) - 1)]; }
      return view('store.index')->with(['products' => $products->sortByDesc('id'), 'categories' => $categories]);
    }

    public function shopping_cart(){
      $categories = Category::all();
      $cart = ShoppingCart::where('user_id', Auth::user()->id)->get();
      if(Auth::check() && Auth::user()->access != 0){
        $requests = CartRequest::all();
      }else{
        $requests = CartRequest::where('user_id', Auth::user()->id)->get();
      }
      if(count($cart) != 0){
        foreach ($cart as $cartProd) {
          $products[] = Product::find($cartProd->product_id);
        }
        if (count($requests) == 0) {
          $requests = [];
        }
        return view('store.shopping-cart')->with([
          'cart' => $cart,
          'products' => $products,
          'categories' => $categories,
          'requests' => $requests,
        ]);
      }else{
        return view('store.shopping-cart')->with([
          'cart' => $cart,
          'products' => 0,
          'categories' => $categories,
          'requests' => $requests,
        ]);
      }
    }
}
