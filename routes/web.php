<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);

// enroll + drop
Route::post('students/{student}/enroll', [StudentController::class, 'enroll'])
    ->name('students.enroll');

Route::delete('students/{student}/drop/{course}', [StudentController::class, 'drop'])
    ->name('students.drop');
