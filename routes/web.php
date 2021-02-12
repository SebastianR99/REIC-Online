<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LawController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [HomeController::class, 'index']);
//
Route::get('/index', [HomeController::class, 'index'] );
//
Route::get('/no', [LawController::class, 'indexNo'] )->name('no');
//
Route::get('/about', [LawController::class, 'getAbout'] );
//
Route::get('/titles', [LawController::class, 'getTitles']);
//
Route::get('/complete', [LawController::class, 'getComplete'] );
//
Route::get('/titulo1', [LawController::class, 'getTitulo1'] );
//
Route::get('/titulo2', [LawController::class, 'getTitulo2'] );
//
Route::get('/titulo3', [LawController::class, 'getTitulo3'] );
//
Route::get('/titulo4', [LawController::class, 'getTitulo4'] );
//
Route::get('/titulo5', [LawController::class, 'getTitulo5'] );
//
Route::get('/titulo6', [LawController::class, 'getTitulo6'] );
//
Route::get('/logout', [LoginController::class, 'logout']);
//
Route::post('/observations', [LawController::class, 'postObservations'] );
//
Route::post('/questions', [LawController::class, 'postQuestions'] );
//
Route::post('/redactar', [LawController::class, 'getRedactar'] );
//
Route::get('/observations-show', [LawController::class, 'getObservations'] );
//
Route::any('/redactarco', [LawController::class, 'getRedactarco'] );
//
Route::get('/questions-show', [LawController::class, 'getQuestions'] );
//
Route::post('/search', [LawController::class, 'postSearch'] );
//
Route::get('/search-show', [LawController::class, 'getSearch'] );


/*Route::get('/login', function () {
    return view('login');
});*/

Route::get('/register', function () {
    return view('register');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

