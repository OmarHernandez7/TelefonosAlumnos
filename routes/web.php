<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumosController;

// INDEX
Route::get('/',[AlumosController::class,'index'])->name('alumnos.index');

// SHOW CONTACTO 
Route::get('/alumnos/{id}/show',[AlumosController::class,'show'])->name('alumno.show');

// CREATE Y STORE CONTACTO
Route::get('/alumnos/create',[AlumosController::class,'create'])->name('alumnos.crear');
Route::post('/alumnos/create',[AlumosController::class,'store'])->name('alumnos.store');

// EDIT Y UPDATE CONTACTO
Route::get('/alumnos/{id}/editar',[AlumosController::class,'edit'])->name('alumnos.editar');
Route::put('/alumnos/{id}/editar',[AlumosController::class,'update'])->name('alumnos.update');

// DESTROYD CONTACTO
Route::delete('/alumnos/{id}/borrar',[AlumosController::class,'destroy'])->name('alumnos.borrar');

