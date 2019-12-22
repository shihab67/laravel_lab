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

Route::get('/logout', 'LogoutController@index');

Route::get('/admin/home', function () {
    return view('admin.index')->with('title',"Admin Home");
});
Route::get('/user/home', function () {
    return view('user.index')->with('title',"User Home");
});

Route::get('/login', function () {
    return view('login')->with('title','Login');
});
Route::post('/login','LoginController@verify');

Route::get('/register', function () {
    return view('user.register')->with('title','Register');
});
Route::post('/register','RegisterController@create');

Route::post('/login','LoginController@verify');

Route::get('/admin/profile','UserController@profile');

Route::get('/admin/customers','UserController@customers');

Route::get('/admin/customers','UserController@customers');

Route::get('/admin/productlist','ProductController@list');

Route::get('/admin/addproduct','ProductController@index');
Route::post('/admin/addproduct','ProductController@insert');

Route::get('/admin/customers/delete/{id}','UserController@delete')->name('delete');
Route::post('/admin/customers/delete/{id}','UserController@destroy_customer');

Route::get('/admin/settings','UserController@settings');
Route::post('/admin/settings','UserController@update_profile');


Route::get('/admin/approvals','UserController@approve_list');

Route::get('/admin/approvals/{id}','UserController@approve_page')->name('approve');
Route::post('/admin/approvals/{id}','UserController@approve');

Route::get('/admin/productlist/edit/{id}','ProductController@edit_product')->name('image.edit');
Route::post('/admin/productlist/edit/{id}','ProductController@update_product')->name('image.update');


Route::get('/admin/productlist/delete/{id}','ProductController@delete_product')->name('image.delete');
Route::post('/admin/productlist/delete/{id}','ProductController@destroy_product')->name('image.destroy');
