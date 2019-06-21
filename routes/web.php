<?php
use Gloudemans\Shoppingcart\Facades\Cart;
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

//main page
Route::get('/cursor','CursorController@index')->name('Cursor');
Route::get('/detail/{pid}','CursorController@show')->name('detail');
//shop page
Route::get('/shop','CursorController@shop')->name('shoppage');
/*
* cart->cursorcontroller
*/
//Route::get('/addcart/{pid}','CursorController@getAddCart')->name('addCart');
//cart
//Route::get('/Cart','CursorController@GoCart')->name('GOcart');


//Cart
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destory');

//Route::get('empty', function () {
    //Cart::destory();
//});
//qty
Route::get('/cart/update','CartController@update')->name('cart.update');




//users -> signup
Route::get('/signup','UserController@getsignup')->name('user.signup');
Route::post('/signup','UserController@postsignup')->name('user.postsignup');
//user -> sign in
Route::get('/signin','UserController@getsignin')->name('user.signin');
Route::post('/signin','UserController@postsignin')->name('user.postsignin');
//LOGOUT profile
Route::get('/userlogout','UserController@logout')->name('userlogout');

Auth::routes();


//ADMIN
Route::get('/admin','AdminController@index')->name('admin');
ROUTE::post('/admin','AdminController@login')->name('adminid.check');
//LOGOUT
ROUTE::get('/logout','AdminController@logout')->name('logout');
//ADMIN CRUD in
Route::get('/adminPage','AdminController@index2')->name('adminpage');
//admin product crud
//product page open
Route::get('uploadPage','ProductController@create')->name('upload');
//product CRUD
//product list
Route::get('/list','ProductController@index')->name('product.list');
//product create
Route::post('upload','ProductController@store')->name('image.upload.product');
//product deatil show
Route::get('/show/{pid}','ProductController@show')->name('product.show');
//product Update form
Route::get('/update/{pid}','ProductController@edit')->name('product.update');
//product Updating
Route::post('/update/{pid}','ProductController@update')->name('updating.product');
//product delete
Route::get('delete/{pid}','ProductController@destory')->name('product.delete');
