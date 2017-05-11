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




Route::get('user/{id}', function ($id=0) {
    
    return 'User '.$id;
})->where('id','[0-9]+');



Route::get('posts/{post}/comments/{comment?}', function ($postId=0, $commentId=0) {
    return $postId.'-----'.$commentId;
});

//Route::get('user/{id}', function ($id) {
//    
//    return 'User '.$id;
//});

Route::get('test', 'Admin\IndexController@index');

Route::get('/view', function (){
    
    return view('my_laravel');
});

Route::get('test',[
    'as'=>'profile', 'uses' => 'Admin\IndexController@index'
]);

Route::get('test', 'Admin\IndexController@index')->name('profile');



Route::group(['prefix' => 'admin', 'namespace'=>'Admin' , 'middleware'=>[ 'web','admin.login']], function () {
    
//Route::get('login', 'IndexController@login');
Route::get('index', 'IndexController@index');
Route::resource('article', 'ArticleController');

});

Route::group(['middleware'=>['web']], function () {
    
    
        Route::get('admin/login', 'Admin\IndexController@login');
    
        Route::get('/', function () {
            session(['key' => '123448']);
            return view('welcome');
        });

        Route::get('/test2', function () {
            echo session('key');
            return "test2";
        });

});



//Route::get('admin/login', 'Admin\IndexController@login');
//
//Route::get('admin/index', 'Admin\IndexController@index');




//Route::match(['get', 'post'], '/test', function () {
//    echo "match 000";
//});


Route::any('/foo', function () {
    
    echo "foo";
});


