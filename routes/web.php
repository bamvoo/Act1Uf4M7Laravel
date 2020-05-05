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
//Route::get('/', function () {
//    return view('welcome');
//});
/*
Route::get('/pepe', function () {
    return "hola Pepe";
});

Route::get('manolo', function () {
    return response('<h1>hola k tal</h1>',404)
        ->header('Content-Type', 'text/html')
        ->cookie('projecte','valor que tiene',30);
});
*/
/*
Route::get('/salir', function () {
    return redirect('home');
});
*/
Route::get('/salir', function () {
    return redirect()->route('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
/*Route::match(['get','post'],function (){};*/

Route::put('post/{id}', function ($id) {

})->middleware('auth', 'role:admin');

Route::resource(
    'properties', 'PropertyController'
);
Route::resource(
    'adminPower', 'UsersController'
);