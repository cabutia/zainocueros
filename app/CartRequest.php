<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartRequest extends Model
{
    protected $fillable = ["products", "user_id", "status", "desc"];

    public function user()
    {
      return $this->hasOne('\App\User', 'id', 'user_id');
    }
}
