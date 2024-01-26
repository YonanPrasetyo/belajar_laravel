<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

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
    return view('home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'show'])->middleware(['auth', 'must-admin-or-teacher']);
Route::get('/student-add', [StudentController::class, 'create'])->middleware(['auth', 'must-admin-or-teacher']);
Route::post('/student', [StudentController::class, 'store'])->middleware(['auth', 'must-admin-or-teacher']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware(['auth', 'must-admin-or-teacher']);
Route::put('/student/{id}', [StudentController::class, 'update'])->middleware(['auth', 'must-admin-or-teacher']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::delete('/student/{id}', [StudentController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::get('/student-deleted', [StudentController::class, 'deleted'])->middleware(['auth', 'must-admin']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware(['auth', 'must-admin']);

Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class-detail/{id}', [ClassController::class, 'show'])->middleware('auth');
Route::get('/classroom-add', [ClassController::class, 'create'])->middleware(['auth', 'must-admin']);
Route::post('/classroom-store', [ClassController::class, 'store'])->middleware(['auth', 'must-admin']);
Route::get('/classroom-edit/{id}', [ClassController::class, 'edit'])->middleware(['auth', 'must-admin']);
Route::put('/classroom/{id}', [ClassController::class, 'update'])->middleware(['auth', 'must-admin']);
Route::get('/classroom-delete/{id}', [ClassController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::delete('/classroom/{id}', [ClassController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::get('/classroom-deleted', [ClassController::class, 'deleted'])->middleware(['auth', 'must-admin']);
Route::get('/classroom/{id}/restore', [ClassController::class, 'restore'])->middleware(['auth', 'must-admin']);

Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create'])->middleware(['auth', 'must-admin']);
Route::post('/extracurricular-store', [ExtracurricularController::class, 'store'])->middleware(['auth', 'must-admin']);
Route::get('/extracurricular-edit/{id}', [ExtracurricularController::class, 'edit'])->middleware(['auth', 'must-admin']);
Route::put('/extracurricular/{id}', [ExtracurricularController::class, 'update'])->middleware(['auth', 'must-admin']);
Route::get('/extracurricular-delete/{id}', [ExtracurricularController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::delete('/extracurricular/{id}', [ExtracurricularController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::get('/extracurricular-deleted', [ExtracurricularController::class, 'deleted'])->middleware(['auth', 'must-admin']);
Route::get('/extracurricular/{id}/restore', [ExtracurricularController::class, 'restore'])->middleware(['auth', 'must-admin']);

Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show'])->middleware(['auth', 'must-admin']);
Route::get('/teacher-add', [TeacherController::class, 'create'])->middleware(['auth', 'must-admin']);
Route::post('/teacher-store', [TeacherController::class, 'store'])->middleware(['auth', 'must-admin']);
Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit'])->middleware(['auth', 'must-admin']);
Route::put('/teacher/{id}', [TeacherController::class, 'update'])->middleware(['auth', 'must-admin']);
Route::get('/teacher-delete/{id}', [TeacherController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::delete('/teacher/{id}', [TeacherController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::get('/teacher-deleted', [TeacherController::class, 'deleted'])->middleware(['auth', 'must-admin']);
Route::get('/teacher/{id}/restore', [TeacherController::class, 'restore'])->middleware(['auth', 'must-admin']);
