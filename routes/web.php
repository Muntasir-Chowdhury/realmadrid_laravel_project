<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;

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


Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/','App\Http\Controllers\StudentController@index');
Route::resource('students', StudentController::class);
Route::resource('lecturers', LecturerController::class);

Route::get('create', [StudentController::class,'create']);
Route::get('index', [StudentController::class,'index']);
Route::get('students_list', [StudentController::class,'students_list']);
Route::get('lecturers_list', [lecturerController::class,'lecturers_list']);
Route::get('edit1', [lecturerController::class,'edit1']);

Route::get('create1', [LecturerController::class,'create1']);
Route::get('trophy', [LecturerController::class,'trophy']);
Route::get('clubmemories', [LecturerController::class,'clubmemories']);
Route::get('option', [LecturerController::class,'option']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
