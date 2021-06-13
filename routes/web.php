<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Projetos;

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
    return view('home');
})->name('home');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/projetos', [Projetos::class, 'exibeProjetos'])->name('projetos');

Route::get('/projeto/{id}/', [Projetos::class, 'exibeProjeto'])->name('projeto');


Route::get('/cadastro/projeto', function () {
    return view('cadastroprojeto');
})->middleware(['auth'])->name('cadastro-projeto');

Route::post('/cadastro/projeto', [Projetos::class, 'registraProjeto'])->middleware(['auth'])->name('cadastra-projeto');



require __DIR__.'/auth.php';
