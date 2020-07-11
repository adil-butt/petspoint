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
use App\Product;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about',function(){
	return view('pages.about-us');
});

Route::get('/contact',function(){
	return view('pages.contact-us');
});
Route::get('/products',function(){
	return view('pages.products',[
		'products'=>Product::orderBy('created_at','asc')->get()
	]);
});
Route::get('/product-details/{id}','ProductController@show');

// Admin panel Routes 

Auth::routes();
Route::resource('product', 'ProductController');
Route::resource('home', 'ProductController');
Route::resource('view-products', 'ProductController');
Route::get('/admin', 'HomeController@index');

Route::post('/product/create', 'ProductController@store');
Route::put('/product/update/{id}', 'ProductController@update');
Route::delete('/view-product/destroy/{id}', 'ProductController@destroy');
Route::put('/edit-product/edit/{id}', 'ProductController@edit');
Route::get('/home',function(){
	return view('admin.pages.home');
});