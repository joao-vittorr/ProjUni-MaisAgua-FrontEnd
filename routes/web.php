<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;

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
    return view('home_test');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/posts', function () {
    return view('posts');
});


Route::get('/query', function () {
    return view('query');
});


//Gogle URL

Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback',[GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

//Route::get('/template', function () {
  //  return view('template');
//});

Route::get('/',[LayoutController::class, "index"])->name('home');





