<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\IngressoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ContatoManagerController;

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

// Rotas Gerais
Route::get('/',[HomeController::class,'home'])->name('site.home');
Route::get('/artista',[ArtistaController::class,'artista'])->name('site.artista');
Route::get('/local',[LocalController::class,'local'])->name('site.local');
Route::get('/show',[ShowController::class,'show'])->name('site.show');
Route::get('/ingresso',[IngressoController::class,'ingresso'])->name('site.ingresso');

// Rotas Contatos
Route::get('/contatos',[ContatoController::class,'index'])->name('site.contatos');
Route::post('/contatos',[ContatoController::class,'store'])->name('site.contatos');
Route::resource('contatosmanager',ContatoManagerController::class); //CRUD contatos

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';