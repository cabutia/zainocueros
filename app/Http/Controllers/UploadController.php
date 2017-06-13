<?php

namespace App\Http\Controllers;

use \App\Product as Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function store(Request $request)
    {
        $file = $request->file('item_image');
        $extension = $file->extension();
        $item = new Product();
        $item->item_title = $request->get('item_title');
        $item->item_desc = $request->get('item_desc');
        $item->item_image = $file->store('/images/online-store/products', 'local');

        if($item->save()){
          return view('store.admin.postupload')->with('item', $item);
        }else{
          return dump("Error");
        }
    }

    public function post_item_upload(Request $r)
    {
      return dump($r);
    }

    // Guardar imagen actualizada
    public function updateFromAjax(Request $data)
    {
      /**
       * @return 'base64'
       **/

       $image = base64_decode($data->base64image);
       $extension = ".png";
       return dump($image);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
