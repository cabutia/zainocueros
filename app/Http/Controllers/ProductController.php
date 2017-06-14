<?php

namespace App\Http\Controllers;

use \App\Product as Product;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function show($id, $slug)
    {
      $product = Product::find($id);
      return dump($product);
    }

    public function store(Request $request)
    {
      # Validacion del formulario
      $this->validate($request, [
        "item_image" => "required",
        "item_desc" => "required",
        "item_title" => "required"
      ]);

      $file = $request->file('item_image');
      $item = new Product();
      $item->item_title = $request->get('item_title');
      $item->item_desc = $request->get('item_desc');
      $item->item_image = $file->store('/images/online-store/products', 'local');
      $item->slug = str_slug($request->get('item_title'), '-');

      if($item->save()){
        return view('store.admin.postupload')->with('item', $item);
      }else{
        return dump("Error");
      }
    }

    public function post_upload(Request $data)
    {
      # Obteniendo datos del input y el producto
      $product = Product::find($data->item_id);
      $oldImage = $product->item_image;
      $imagedata = base64_decode($data->base64image);

      # Si se puede guardar la imagen nueva
      if(Storage::disk('local')->put($oldImage.'.png', $imagedata)){
        # Se borra la imagen original
        Storage::delete($oldImage);
        # Se actualizan los datos del producto
        $product->item_image = $oldImage.'.png';
        $product->published = 1;
        $product->save();
        return redirect(route('products'))->withErrors('Agregado!');
      }else{
        return redirect(route('products'))->withErrors('Hubo un error al cargar el producto.');
      }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete(Request $r)
    {
        $id = $r->get('id');
        $product = Product::find($id);
        if($product->delete()){
          return redirect(route('products'))->withErrors('Eliminado correctamente.');
        }else{
          return 'Err';
        }
    }

    # Only admin
    public function destroy($id)
    {
        //
    }
}
