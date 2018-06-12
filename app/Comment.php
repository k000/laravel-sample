<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

  //コメントはポストに属す
  public function post()
  {
    return $this->belongsTo(Post::class);
  }

  //コメントはユーザーに属す
  public function user()
  {
    return $this->belongsTo('User');
  }

}
