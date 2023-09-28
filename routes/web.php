<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/contato', [SiteController::class, 'contato']);
Route::get('/servicos', [SiteController::class, 'servicos']);
Route::get('/servico/{id}', [SiteController::class, 'servico']);


Route::resource('clients', ClientController::class);
Route::resource('funcionarios', FuncionarioController::class);

