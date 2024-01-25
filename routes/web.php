<?php

use Illuminate\Support\Facades\Route;
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
    return view('home',[
        'name'=> "Yonan Prasetyo",
        'role'=> "Staff",
        'buah'=> ['pisang', 'apel', 'jeruk', 'semangka', 'kiwi']
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/student-add', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student/{id}', [StudentController::class, 'destroy']);
Route::get('/student-deleted', [StudentController::class, 'deleted']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore']);

Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);
Route::get('/classroom-add', [ClassController::class, 'create']);
Route::post('/classroom-store', [ClassController::class, 'store']);
Route::get('/classroom-edit/{id}', [ClassController::class, 'edit']);
Route::put('/classroom/{id}', [ClassController::class, 'update']);
Route::get('/classroom-delete/{id}', [ClassController::class, 'delete']);
Route::delete('/classroom/{id}', [ClassController::class, 'destroy']);
Route::get('/classroom-deleted', [ClassController::class, 'deleted']);
Route::get('/classroom/{id}/restore', [ClassController::class, 'restore']);

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show']);
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create']);
Route::post('/extracurricular-store', [ExtracurricularController::class, 'store']);
Route::get('/extracurricular-edit/{id}', [ExtracurricularController::class, 'edit']);
Route::put('/extracurricular/{id}', [ExtracurricularController::class, 'update']);
Route::get('/extracurricular-delete/{id}', [ExtracurricularController::class, 'delete']);
Route::delete('/extracurricular/{id}', [ExtracurricularController::class, 'destroy']);
Route::get('/extracurricular-deleted', [ExtracurricularController::class, 'deleted']);
Route::get('/extracurricular/{id}/restore', [ExtracurricularController::class, 'restore']);

Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show']);
Route::get('/teacher-add', [TeacherController::class, 'create']);
Route::post('/teacher-store', [TeacherController::class, 'store']);
Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit']);
Route::put('/teacher/{id}', [TeacherController::class, 'update']);
Route::get('/teacher-delete/{id}', [TeacherController::class, 'delete']);
Route::delete('/teacher/{id}', [TeacherController::class, 'destroy']);
Route::get('/teacher-deleted', [TeacherController::class, 'deleted']);
Route::get('/teacher/{id}/restore', [TeacherController::class, 'restore']);
