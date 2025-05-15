<?php

use App\Http\Controllers\AcessoController;
use App\Http\Controllers\CompromissosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/compromissos', [CompromissosController::class, 'index'])->name('compromissos');

Route::post('/compromissos', [CompromissosController::class, 'salvar'])->name('compromissos.salvar');

Route::put('/compromissos', [CompromissosController::class, 'editar'])->name('compromissos.editar');

Route::get('/compromissos/editar/{compromisso}', [CompromissosController::class, 'editar'])->name('compromissos.editarForm');

Route::delete('/compromissos', [CompromissosController::class, 'apagar'])->name('compromissos.apagar');

Route::get('/acesso', [AcessoController::class, 'index'])->name('acesso');

Route::post('/acesso', [AcessoController::class,'login'])->name('acesso.login');