<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ["item_image", "item_title", "item_desc"];
    public $timestamps = true;

    public function subcategory()
    {
      return $this->hasOne('\App\Subcategory', 'id', 'category_id');
    }

    public function images()
    {
      return $this->hasMany('\App\ProductImage', 'product_id', 'image_id');
    }
}
