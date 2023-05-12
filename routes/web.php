<?php

use App\Http\Controllers\StudentController;
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

Route::get('student_list', [StudentController::class,'index']);
Route::get('add-student', [StudentController::class,'addStudent']);
Route::post('save-student', [StudentController::class,'saveStudent']);
Route::get('edit-student/{id}', [StudentController::class, 'editStudent']);
Route::post('update-student', [StudentController::class,'updateStudent']);
Route::get('delete-student/{id}', [StudentController::class, 'deleteStudent']);