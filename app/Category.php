<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  
  public function Post(){
    return $this->hasMany(Post::class);
  }
}
