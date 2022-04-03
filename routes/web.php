<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobre'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){return 'login';})->name('site.login');

//App
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function (){return 'clientes';})->name('app.clientes');
    Route::get('/produtos', function() {return 'produtos';})->name('app.produtos');
    Route::get('/fornecedores', function () {return 'fornecedores';})->name('app.fornecedores');
});

Route::fallback(function () {
    echo 'Ihh deu ruim em alguma coisa ai hein!. <a href="'.route('site.index').'">Clica aqui</a> para retornar';
});

