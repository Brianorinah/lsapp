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
/*
Route::get('/', function () {
   // return view('welcome');
   return 'Hello World';
});


 
 
Route::get('/users/{id}', function ($id) {
    return 'This is'.$id;
   
});
*/
 Route::get('/', 'PagesController@index');
 Route::get('/about', 'PagesController@about');
 Route::get('/services', 'PagesController@services');

 Route::Resource('posts', 'PostsController');
   
    
 /*
 
 Route::get('/about', function () {
    return view('pages.index');
   
});

Route::get('/', function () {
    return view('pages.index');
   
});

*/
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
