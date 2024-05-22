<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'create']);
Route::post('/student', [StudentController::class,'store'])->name('student.store');
Route::get('student/listar',[StudentController::class,'index'])->name('student.index');
Route::get('student/{student}',[StudentController::class,'show'])->name('student.show');
Route::get('student/{student}/editar',[StudentController::class,'edit'])->name('student.edit');
Route::put('student/{student}',[StudentController::class,'update'])->name('student.update');
Route::delete('estudiantes/{student}',[StudentController::class,'destroy'])->name('student.destroy');