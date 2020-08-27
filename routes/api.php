<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login','LoginController@main');
Route::get('/list-product-category','ListProductCategoryController@main');
Route::get('/product-by-category','GetProductByCategoryController@main');
