
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//トップページ
Route::get('/', function () {
    $select_cat = config('selectcat');
    return view('welcome',['select_cat' => $select_cat]);
});

//参照先
//Authファサードを通してIlluminate\Routing\Routerインスタンスのauthメソッドを呼び出しています。
Auth::routes();
Route::get('/register/verify/{token}', 'Auth\RegisterController@verify');


Route::get('/home', 'HomeController@index')->name('home');

//postsにアクセス（userの投稿一覧ページ)したら
Route::get('/posts', 'PostController@index')->name('index');

//Postの投稿ページ
Route::get('/posts/new','PostController@new');
Route::post('/posts/new','PostController@store');
//postの詳細ページ
Route::get('/posts/{id}','PostController@detail');


//カテゴリー別記事一覧ページ
Route::get('category/{id}','PostController@category');

//利用規約
Route::get('/kiyaku',function(){
    return view('kiyaku');
});




//コメント投稿
//Route::post('/posts/{id}','CommetsController@store');
Route::post('/posts/{id}','CommetsController@store');




//ユーザーページ
Route::get('/user/{id}','UsersController@detail');

//ユーザー削除画面
Route::get('delete/{id}','UsersController@deletePage');
//ユーザー削除実行
//Route::get('/delete/{id}','UsersController@deleteData');
