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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admincp', 'AdminController@index')->name('admincp');
Route::get('/admincp/artikel/create', 'AdminController@create')->name('admincp.create');
Route::get('/admincp/artikel', 'AdminController@index')->name('admincp.index');
Route::get('/admincp/kategori', 'KategoriController@index')->name('kategori.index');