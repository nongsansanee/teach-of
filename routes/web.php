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

Route::get('/ui-store-book',[BookController::class,'index']);
Route::post('/store-book',[BookController::class,'store']);
Route::get('/show-books',[BookController::class,'showAll']);
Route::get('/show-book/{id}',[BookController::class,'show']);

Route::get('/show-book-catagory/{id}',[BookController::class,'show_books_by_catagory']);

Route::post('/login',[BookController::class,'checkUser']);
