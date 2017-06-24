<?php

namespace App\Http\Controllers;

use Auth;
use \App\Product;
use \App\ShoppingCart;
use \App\CartRequest;
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

    public function send_request(Request $request)
    {
      $id = $request->get('user_id');
      if(Auth::user()->id == $id){
        $userCart = ShoppingCart::where('user_id', $id)->get();
        foreach ($userCart as $prod) {
          $products[] = $prod->product_id;
        }
        $consulta = $request->get('desc');
        $products = implode(',', $products);
        if(CartRequest::create(["products" => $products,"user_id" => $id,"status" => 0, "desc" => $consulta])){
          $userCart = ShoppingCart::where('user_id', $id)->delete();
          return redirect($this->getRedirectUrl())->withErrors('Su consulta sera respondida a la brevedad!');
        }
      }else{
        return redirect(route('login'));
      }
    }

    public function cart_request_details($id, $user_id)
    {
      if($user_id == Auth::user()->id){
        $cart = CartRequest::find($id);
        $prodIds = explode(',', $cart->products);
        $products = Product::whereIn('id', $prodIds)->get();
        return dump($products);
      }else{
        return redirect(route('login'));
      }
    }

    public function set_request_as_read(Request $request)
    {
      $cartRequest = CartRequest::find($request->get('cart'));
      $cartRequest->status = 1;
      $cartRequest->save();
      return redirect($this->getRedirectUrl())->withErrors('Hecho!');
    }
}
