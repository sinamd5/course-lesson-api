<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CourseController;

// API versioning using /api/v1 prefix
Route::prefix('v1')->group(function () {
    
    Route::post('/courses/{course}/lessons', [CourseController::class, 'storeLesson'])
        ->name('api.v1.courses.lessons.store');

    Route::put('/courses/{course}', [CourseController::class, 'updateCoursePrice'])
        ->name('api.v1.courses.update');
});
