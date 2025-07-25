<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLessonRequest;
use App\Models\Course;
use App\Http\Requests\UpdateCoursePriceRequest;

class CourseController extends Controller
{
    public function storeLesson(StoreLessonRequest $request, $courseId){
        $course = Course::findOrFail($courseId);

        $lesson = $course->lessons()->create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Lesson created successfully',
            'data' => $lesson,
        ], 201);
    }

    public function updateCoursePrice(UpdateCoursePriceRequest $request, $courseId){
        $course = Course::findOrFail($courseId);

        $course->update([
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Course price updated successfully',
            'data' => $course,
        ]);
    }
}
