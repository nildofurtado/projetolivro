<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivrosController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/livros', [LivrosController::class, 'store'])->name('livros.store')->middleware('auth');
Route::get('/livros/consulta', [LivrosController::class, 'index'])->name('livros.consulta')->middleware('auth');
