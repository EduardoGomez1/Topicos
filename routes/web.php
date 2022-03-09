<?php

use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('welcome');
});

//Students
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students_store', [StudentController::class, 'store']);
Route::post('/students_index', [StudentController::class, 'index']);
Route::post('/show_students', [StudentController::class, 'show']);
Route::post('/students_destroy', [StudentController::class, 'destroy']);
Route::post('/students_update', [StudentController::class, 'update']);

//Programs
Route::post('/show_programs', [ProgramController::class, 'show']);

//Token
Route::get('/create_token', [StudentController::class, 'create_token']);



