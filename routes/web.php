<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;



Route::get('/', function () {
    return view('inicio');
});

//area

Route::get('area/list', [AreaController::class, 'index'])->name('area.list');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/show/{id}', [AreaController::class, 'show'])->name('area.show');
Route::get('area/{area}/edit', [AreaController::class, 'edit'])->name('area.edit');
Route::put('area/{area}', [AreaController::class, 'update'])->name('area.update');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('area.destroy');


//training center
Route::get('trainingCenter/list', [TrainingCenterController::class, 'index'])->name('trainingCenter.list');
Route::get('trainingCenter/create', [TrainingCenterController::class, 'create'])->name('trainingCenter.create');
Route::post('trainingCenter/store', [TrainingCenterController::class, 'store'])->name('trainingCenter.store');
Route::get('trainingCenter/show/{id}', [TrainingCenterController::class, 'show'])->name('trainingCenter.show');
Route::get('trainingCenter/{trainingCenter}/edit', [TrainingCenterController::class, 'edit'])->name('trainingCenter.edit');
Route::put('trainingCenter/{trainingCenter}', [TrainingCenterController::class, 'update'])->name('trainingCenter.update');
Route::delete('trainingCenter/{trainingCenter}', [TrainingCenterController::class, 'destroy'])->name('trainingCenter.destroy');

//computer

Route::get('computer/list', [ComputerController::class, 'index'])->name('computer.list');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/show/{id}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.edit');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');

//course

Route::get('course/list', [CourseController::class, 'index'])->name('course.list');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/show/{id}', [CourseController::class, 'show'])->name('course.show');
Route::get('course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');


//apprentice

Route::get('apprentice/list', [ApprenticeController::class, 'index'])->name('apprentice.list');
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentice/show/{id}', [ApprenticeController::class, 'show'])->name('apprentice.show');
Route::get('apprentice/{apprentice}/edit', [ApprenticeController::class, 'edit'])->name('apprentice.edit');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentice.update');
Route::delete('apprentice/{apprentice}', [ApprenticeController::class, 'destroy'])->name('apprentice.destroy');

//teacher

Route::get('teacher/list', [TeacherController::class, 'index'])->name('teacher.list');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/show/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('teacher/{teacher}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');