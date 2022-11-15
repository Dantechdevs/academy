<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\classControllers;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\studenController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;


Route::resource('/',DashboardController::class);
Route::resource('Teachers',TeachersController::class);
Route::resource('Class',classControllers::class);
Route::resource('Library',LibraryController::class);
Route::resource('Students',studenController::class);
Route::resource('Term',TermController::class);
Route::resource('AcademicYear',AcademicYearController::class);
Route::resource('Customer',CustomerController::class);
Route::resource('Parents',ParentsController::class);
Route::resource('Fees',FeesController::class);
