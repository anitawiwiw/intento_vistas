<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/materias', [App\Http\Controllers\MateriaController::class, 'index'])
	->name('materias.index')
	->middleware('auth'); 

Route::get('/estudiantes', [App\Http\Controllers\EstudianteController::class, 'index'])
	->name('estudiantes.index')
	->middleware('auth'); 