<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LawController;

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

Route::get('/', [HomeController::class, 'getIndex'] );
//
Route::get('/about', [HomeController::class, 'getAbout'] );
//
Route::get('/titles', [LawController::class, 'getTitles'] );
//
Route::get('/titles/title1', [LawController::class, 'getTitle1'] );
//
Route::get('/titles/title2', [LawController::class, 'getTitle2'] );
//
Route::get('/titles/title3', [LawController::class, 'getTitle3'] );
//
Route::get('/titles/title4', [LawController::class, 'getTitle4'] );
//
Route::get('/titles/title5', [LawController::class, 'getTitle5'] );
//
Route::get('/titles/title6', [LawController::class, 'getTitle6'] );
//
Route::get('/complete', [LawController::class, 'getComplete'] );

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
