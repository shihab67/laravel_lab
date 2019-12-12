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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('title',"Welcome");
});
Route::get('/admin/home', function () {
    return view('admin.index')->with('title',"Admin Home");
});
Route::get('/manager/home', function () {
    return view('manager.index')->with('title',"Manager Home");
});

Route::get('/login', function () {
    return view('login')->with('title','Login');
});
Route::post('/login','LoginController@verify');

Route::get('/admin/profile','UserController@profile');

Route::get('/admin/settings','UserController@settings');
Route::post('/admin/settings','UserController@update_profile');

