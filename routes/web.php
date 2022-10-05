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

// Product List Url
Route::get('/', function () {
    $response = Http::post('https://poplook.com/test/product_list');
    return view('product_list', [
        'response' => $response,
    ]);
});

// Product Info Url
Route::get('/product_info/{id}', function($id) {

    // Get Api with product id parameter
    $response = Http::post('https://poplook.com/test/product_info/'. $id);
    return view('product_info', [
        'response' => $response,
    ]);
})-> where('id', '[0-9]+'); // parameter for number only
