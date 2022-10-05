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
    $response = Http::post('https://poplook.com/test/product_list');
    return view('product_list', [
        'heading' => 'Latest Listing',
        'response' => $response,
    ]);
});

Route::get('/product_info/{id}', function($id) {
    $response = Http::post('https://poplook.com/test/product_info/'. $id);
    return view('product_info', [
        'heading' => 'Latest Listing',
        'response' => $response,
    ]);
})-> where('id', '[0-9]+'); 

Route::get('/asdsa/{id}', function($id) {
    return response('get '. $id);
})-> where('id', '[0-9]+'); 


Route::get('/test/{id}', function ($id) {
    $response = Http::post('https://poplook.com/test/product_list');

//    foreach($item in $response.da) {
//         if($item.) {

//         }
//    }
    return view('product_info', [
        'heading' => 'Latest Listing',
        'response' => $response,
        'listing' => [
            [
                'no' => 1,
                'title' => 'test',
                'desc' => 'testing desc'
            ],
            [
                'no' => 2,
                'title' => 'test1',
                'desc' => 'testing desc1'
            ],
        ]
    ]);
});

