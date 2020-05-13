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

Route::get('/', 'MainControllers@home');

Auth::routes();

Route::resource('products','ProductsController');

/*
GET / products => index
POST / products => store
GET / products / create => formulario para crear

GET /products/ :id => mostrar un producto con ID
GET /products/:id/edit
PUT/PATCH /products/:id
DELETE /products/:id
*/

Route::get('/home', 'HomeController@index');




Route::get('/home', function () {
    return view('main.home');
});

Route::get('/vinos', function(){
    return view('products.vinos');
});

Route::get('/eventos', function(){
    return view('products.eventos');
});

Route::get('/otrosproducts', function(){
    return view('products.otrosproducts');
});

Route::get('/galeria', function(){
    return view('products.galeria');
});

Route::get('/contacto', function(){
    return view('products.contacto');
});

Route::get('/extras', function(){
    return view('products.extras');
});

Route::get('/folder', function(){
    return view('products.folder');
});
