<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return "test";
    return view('welcome');
});

Route::get('/nong',function(){
    return view('nong');
});

Route::post('/nong-post',function(){
    return 'aaaaa';
    return view('nong');
});

Route::get('/show-book',[BookController::class,'index']);
Route::post('/store-book',[BookController::class,'store']);

Route::post('/login',[BookController::class,'checkUser']);
