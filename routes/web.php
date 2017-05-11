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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id?}', function ($id=0) {
    
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment?}', function ($postId=0, $commentId=0) {
    return $postId.'-----'.$commentId;
});

//Route::get('user/{id}', function ($id) {
//    
//    return 'User '.$id;
//});

Route::get('/hd', function () {
    
    echo "GET";
    return view('welcome');
});


Route::post('/hd', function () {
    
    echo "Post";
     return view('welcome');
});

Route::put('/hd', function () {
    
    echo "put";
     return view('welcome');
});


Route::match(['get', 'post'], '/test', function () {
    echo "match";
});


Route::any('/foo', function () {
    
    echo "foo";
});


