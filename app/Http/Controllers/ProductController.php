<?php

namespace App\Http\Controllers;

use \App\Product as Product;
use \App\ProductImage as PImage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Approached\LaravelImageOptimizer\ImageOptimizer;

class ProductController extends Controller
{

    public function store(Request $request, ImageOptimizer $imageOptimizer)
    {
      # Validacion del formulario
      $this->validate($request, [
        "images" => "required",
        "item_desc" => "required",
        "item_title" => "required",
        "category_id" => "required"
      ]);

      $files = $request->file('images');
      $item = new Product();
      $item->item_title = $request->get('item_title');
      $item->item_desc = $request->get('item_desc');
      $item->image_id = uniqid();
      $item->category_id = $request->get('category_id');
      $item->slug = str_slug($request->get('item_title'), '-');
      $item->tags = $request->get('tags');

      $iid = $item->image_id;

      if($item->save()){
        foreach ($files as $imageFile) {
          $imageOptimizer->optimizeUploadedImageFile($imageFile);
          $newImage = PImage::create([
            "path" => $imageFile->store('/images/online-store/products', 'local'),
            "product_id" => $iid
          ]);
        }
        return view('store.admin.postupload')->with('item', $item);
      }else{
        return dump("Error");
      }
    }

    public function post_upload(Request $data)
    {
      # Obteniendo datos del input y el producto
      $product = Product::find($data->item_id);
      $images = PImage::where('product_id', $product->image_id)->get();
      foreach ($images as $id) {
        $idimages[] = $id->id;
      }
      for ($i=0; $i < count($data->input_image) ; $i++) {
        if (Storage::delete($product->images[$i]->path)) {
          if (Storage::disk('local')->put($product->images[$i]->path.'.png', base64_decode($data->input_image[$i]))) {
            $pimage = PImage::find($idimages[$i]);
            $pimage->update([ "path" => $product->images[$i]->path.'.png' ]);
            $product->published = 1;
            if ($product->save()) {
              # Do nothing
            }else{
              # Si $product->save() falla
              return redirect(route('products'))->withErrors('No se pudo actualizar la info. del producto.');
            };
          }else{
            # Si Storage::put falla
            return redirect(route('products'))->withErrors('No se pudieron guardar las imagenes.');
          }
        }else{
          # Si Storage::delete falla
          return redirect(route('products'))->withErrors('No se pudieron eliminar las imagenes.');
        }
      }
      # Si el ciclo se completa correctamente
      return redirect(route('products'))->withErrors('Agregado!');
    }

    public function update(Request $r)
    {
        $product = Product::find($r->id);
        $product->item_title = $r->get('item_title');
        $product->item_desc = $r->get('item_desc');
        $product->category_id = $r->get('category_id');
        $product->tags = $r->get('tags');

        if($product->save()){
          return redirect(route('product.details', ['id' => $product->id, 'slug' => $product->slug]))
                          ->with('product', Product::find($r->get('id')))
                          ->withErrors('Actualizado!');
        }else{
          return redirect(route('product.details', ['id' => $product->id, 'slug' => $product->slug]))
                          ->with('product', $product)
                          ->withErrors('Ocurrio un problema al actualizar los datos del producto.');
        }
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

    public function destroy($id)
    {
        # Only admin
    }
}
