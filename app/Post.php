<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //挿入許可
   protected $fillable = ['category_id','title','post','user_name'];

    //タスク所有のユーザーの取得
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    //ポスト必ず一つのカテゴリーに属する
    public function category(){
      return $this->belongsTo(Category::class);
    //  return $this->belongsTo('Category','category_id');
    }


    //ポストにはコメントが複数ある
    public function comment(){
      return $this->hasMany(Comment::class);
    }





}
