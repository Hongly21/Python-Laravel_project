<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/students' ,[StudentController::class, 'index'])->name('students.index');
// Route::get('/students/create' ,[StudentController::class, 'create'])->name('students.create');
// Route::get('/students/{id}' ,[StudentController::class, 'show'])->name('students.show');
// Route::get('/students/{id}/edit' ,[StudentController::class, 'edit'])->name('students.edit');

Route::resource('/students',StudentController::class); // this one this line of student code project


Route::resource('customers', CustomerController::class);
Route::resource('services', ServiceController::class);
Route::resource('appointments', AppointmentController::class);
