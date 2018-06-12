<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    protected $table = 'users';
    protected $dates = ['deleted_at'];



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'proud','message','password','verified', 'email_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



  //特定ユーザーの全ポストを取得
  public function posts()
  {
    return $this->hasMany(Post::class);
  }


  //特定ユーザーの全コメントを
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }







}
