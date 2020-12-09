<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
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


Route::get('/master','App\Http\Controllers\EbookController@master');
Route::get('/nav','App\Http\Controllers\EbookController@nav');
Route::get('/about','App\Http\Controllers\EbookController@about');
Route::get('/list','App\Http\Controllers\EbookController@list');