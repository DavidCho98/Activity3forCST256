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




Route::get('/neworder', function(){

    return view('order');

});
Route::post('/addorder','OrderController@index');




Route::get('/customer', function () {
    return view('customer');
});

Route::post('/addCustomer', 'CustomerController@index');



Route::get('/login2', function () {

    return view('layouts/login2');
});

Route::post('/doLogin', 'Login2Controller@index');




Route::post('/whoAmI','WhatsMyNameController@index');

Route::get('/askMe', function () {
    return view('whoAmI');
});

Route::get('/login22', function ()
{
    return view('login22');
});





Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return "Hello World.";
});

Route::get('/helloworld', function () {
    return view('helloworld');
});
Route::get('/test', 'TestController@test');


// Function can be used to return parameters from the url
Route::get('contact-us', function () {
    // make sure to only use the name of the view
    return view('contact');
});

Route::get('about-us', function () {
    return view('about');
});


Route::get('products', function () {
    $products = [
        'Product1',
        'Product2','Product3','Product4','Product5'

    ];
    return view('/products', ['products' => $products]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
