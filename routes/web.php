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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/boletim', function () {
    return view('boletim');
});

Route::post('/boletim', function () {
    return view('boletim');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/problema', function () {
    return view('problema');
});

Route::post('/problema', function () {
    return view('problema');
});

Route::get('/query', function () {
    return view('query');
});

Route::get('/qq', function () {
    return [["lat"=>-6.479984036211917, "lng"=>-35.43179852420206, "tipo"=>"vazamento"], ["lat"=>-6.485425109762347, "lng"=>-35.426671084584484, "tipo"=>"degetos"] ];
});


Route::get('/mock_problemas', function () {
    return [["lat"=>-6.479984036211917, "lng"=>-35.43179852420206, "tipo"=>"vazamento"],   ["lat"=>-6.485425109762347, "lng"=>-35.426671084584484, "tipo"=>"degetos"] ];
})->name('mock');


//Gogle URL

Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback',[GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

Route::get('/',[LayoutController::class, "index"])->name('home');

Route::get('/visualizarp', function () {
    return view('visualizarp');
});

Route::get('/update-cookie', function () {
    return response()->json(true);
})->name("update-cookie");


