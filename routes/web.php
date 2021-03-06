<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
    return view('about',['articles'=>App\Article::latest()->get()
    ]);
});
Route::get('/articles','ArticlesController@index')->name('articles.index');
Route::post('/articles','ArticlesController@store');
Route::get('/articles/create','ArticlesController@create');

Route::get('/articles/{article}','ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit','ArticlesController@edit');
Route::put('articles/{article}','ArticlesController@update');


//Route::get('/test', function () {
//    return view('test');
//});
//Route::get('/',function (){
//    $name = request('name');
//    return view('test',['name'=>$name]);
//});
//Route::get('post/{id}', function ($post){
//    $posts=[
//        'c'=>'Hello every one Its my first post',
//        'my-second-post'=>'Hello every one Its my second post'
//
//    ];
//    return view('post',[
//        'post'=>$posts[$post]
//    ]);
//});
//Route::get('/post/{id}', function ($post));
Route::get('post/{id}' ,'PostController@show');

