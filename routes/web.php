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

Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);
Route::get('/classroom-add', [ClassController::class, 'create']);
Route::post('/classroom-store', [ClassController::class, 'store']);

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show']);
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create']);
Route::post('/extracurricular-store', [ExtracurricularController::class, 'store']);

Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show']);
Route::get('/teacher-add', [TeacherController::class, 'create']);
Route::post('/teacher-store', [TeacherController::class, 'store']);
