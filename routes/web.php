<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/Sujets',SujetController::class);
Route::resource('/Reponses',ReponseController::class);
Route::get('Reponses/create/{id}',[ReponseController::class,'create'])->name('create_reponse');
Route::post('Reponses/store/{id}',[ReponseController::class,'store'])->name('store_reponse');




Auth::routes();

//Route::get('Sujets/create/{id}',[SujetController::class,'create'])->name('create_sujet');
