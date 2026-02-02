<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');;
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

//RUTAS DE RECINTOS
Route::get('/admin/recintos', [App\Http\Controllers\RecintoController::class, 'index'])->name('recintos.index')->middleware('auth');
Route::get('/admin/recintos/circuns', [App\Http\Controllers\RecintoController::class, 'circuns'])->name('recintos.circuns')->middleware('auth');
Route::get('/admin/recintos/create', [App\Http\Controllers\RecintoController::class, 'create'])->name('recintos.create')->middleware('auth');
Route::post('/admin/recintos/store', [App\Http\Controllers\RecintoController::class, 'store'])->name('recintos.store')->middleware('auth');
Route::get('/admin/recintos/{id}', [App\Http\Controllers\RecintoController::class, 'show'])->name('recintos.show')->middleware('auth');
Route::get('/admin/recintos/{id}/edit', [App\Http\Controllers\RecintoController::class, 'edit'])->name('recintos.edit')->middleware('auth');
Route::put('/admin/recintos/{id}', [App\Http\Controllers\RecintoController::class, 'update'])->name('recintos.update')->middleware('auth');
Route::delete('/admin/recintos/{id}/destroy', [App\Http\Controllers\RecintoController::class, 'destroy'])->name('recintos.destroy')->middleware('auth');

//RUTAS DE MESAS
Route::get('/admin/mesas', [App\Http\Controllers\MesaController::class, 'index'])->name('mesas.index')->middleware('auth');
Route::get('/admin/mesas/create', [App\Http\Controllers\MesaController::class, 'create'])->name('mesas.create')->middleware('auth');
Route::post('/admin/mesas/store', [App\Http\Controllers\MesaController::class, 'store'])->name('mesas.store')->middleware('auth');
Route::get('/admin/mesas/{id}', [App\Http\Controllers\MesaController::class, 'show'])->name('mesas.show')->middleware('auth');
Route::get('/admin/mesas/{id}/edit', [App\Http\Controllers\MesaController::class, 'edit'])->name('mesas.edit')->middleware('auth');
Route::put('/admin/mesas/{id}', [App\Http\Controllers\MesaController::class, 'update'])->name('mesas.update')->middleware('auth');
Route::delete('/admin/mesas/{id}/destroy', [App\Http\Controllers\MesaController::class, 'destroy'])->name('mesas.destroy')->middleware('auth');

