<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::post('/chatgpt', 'App\Http\Controllers\HomeController@chatgpt');
Route::get('/seller/show/{id}', 'App\Http\Controllers\SellerController@show');
// Route::get('/about', 'App\Http\Controllers\AboutController@index');
