<?php

namespace App\Http\Controllers;

use \App\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart(Request $request)
    {
        if(ShoppingCart::create(["user_id" => $request->get('user_id'), "product_id" => $request->get('product_id')])){
          return redirect(route('show.shopping_cart'))->withErrors('Producto agregado!');
        }
    }

    public function delete(Request $r)
    {
      $id = $r->get('item_id');
      $product = ShoppingCart::where('product_id',$id)->first();
      if($product->delete()){
        return redirect(route('show.shopping_cart'))->withErrors('Producto removido.');
      }else{
        return 'Err';
      }
    }
}
