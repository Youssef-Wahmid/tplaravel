<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\FormateurController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::resource('formateurs', FormateurController::class);
Route::resource('groups', GroupController::class);
Route::resource('etudiants', EtudiantController::class);


Route::get('/create/for', function () {
    return view('formateur.create');
});

