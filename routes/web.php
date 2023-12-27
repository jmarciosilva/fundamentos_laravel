<?php

use App\Models\Client;
use App\Http\Controllers\Saudacao;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index']);
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/contato', [SiteController::class, 'contato']);
Route::get('/servicos', [SiteController::class, 'servicos']);
Route::get('/servico/{id}', [SiteController::class, 'servico']);

Route::get('/saudacao/{nome?}', Saudacao::class);

Route::get('/clients', [\App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/{id}', [\App\Http\Controllers\ClientController::class, 'show'])->name('clients.show');

