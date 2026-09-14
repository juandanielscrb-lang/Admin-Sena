<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::prefix('v1')->group(function () {

    // Computers
    Route::get('computers', [ComputerController::class, 'apiindex']);
    Route::post('computers', [ComputerController::class, 'store']);
    Route::get('computers/{computer}', [ComputerController::class, 'show']);
    Route::put('computers/{computer}', [ComputerController::class, 'update']);
    Route::delete('computers/{computer}', [ComputerController::class, 'destroy']);


    // Areas
    Route::get('areas', [AreaController::class, 'apiindex']);
    Route::post('areas', [AreaController::class, 'store']);
    Route::get('areas/{area}', [AreaController::class, 'show']);
    Route::put('areas/{area}', [AreaController::class, 'update']);
    Route::delete('areas/{area}', [AreaController::class, 'destroy']);


    // Training Centers
    Route::get('training-centers', [TrainingCenterController::class, 'apiindex']);
    Route::post('training-centers', [TrainingCenterController::class, 'store']);
    Route::get('training-centers/{trainingCenter}', [TrainingCenterController::class, 'show']);
    Route::put('training-centers/{trainingCenter}', [TrainingCenterController::class, 'update']);
    Route::delete('training-centers/{trainingCenter}', [TrainingCenterController::class, 'destroy']);


    // Teachers
    Route::get('teachers', [TeacherController::class, 'apiindex']);
    Route::post('teachers', [TeacherController::class, 'store']);
    Route::get('teachers/{teacher}', [TeacherController::class, 'show']);
    Route::put('teachers/{teacher}', [TeacherController::class, 'update']);
    Route::delete('teachers/{teacher}', [TeacherController::class, 'destroy']);


    // Courses
    Route::get('courses', [CourseController::class, 'apiindex']);
    Route::post('courses', [CourseController::class, 'store']);
    Route::get('courses/{course}', [CourseController::class, 'show']);
    Route::put('courses/{course}', [CourseController::class, 'update']);
    Route::delete('courses/{course}', [CourseController::class, 'destroy']);


    // Apprentices
    Route::get('apprentices', [ApprenticeController::class, 'apiindex']);
    Route::post('apprentices', [ApprenticeController::class, 'store']);
    Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show']);
    Route::put('apprentices/{apprentice}', [ApprenticeController::class, 'update']);
    Route::delete('apprentices/{apprentice}', [ApprenticeController::class, 'destroy']);

});
