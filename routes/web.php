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
Route::get('/complete', [LawController::class, 'getComplete'] );

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
