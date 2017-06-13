<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["item_image", "item_title", "item_desc"];
    public $timestamps = true;
}
