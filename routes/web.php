<?php
namespace App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso/{dato1}',[CursoController::class,'es_primo'])->name('curso.show');
Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'amigos'])->name('curso.show');

Route::get('/numeroprimo', [controlador_taller::class, 'create']);
Route::post('/numeroprimo', [controlador_taller::class, 'store'])->name('taller.store');

Route::get('/numeroamigo', [controlador_taller::class, 'createAmigos']);
Route::post('/numeroamigo', [controlador_taller::class, 'storeAmigos'])->name('taller.store-amigos');

Route::get('/promedionotas', [controlador_taller::class, 'createNotas']);
Route::post('/promedionotas', [controlador_taller::class, 'storeNotas'])->name('taller.store-notas');

Route::get('/formulacuadratica', [controlador_taller::class, 'createCuadratica']);
Route::post('/formulacuadratica', [controlador_taller::class, 'storeCuadratica'])->name('cuadratica.store');
